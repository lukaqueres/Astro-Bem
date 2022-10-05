<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserManageController extends Controller {

    private function replyWithStatus($name, $message, $inputs = null)
    {
        return back()->with($name, $error)->withInput($inputs);
    }

    public function add(Request $request)
    {
        $lengths = [
        "name" => 25,
        "email" => 30,
        "password" => 18,
        ];

        if ($request->missing('name') or $request->input('name') == '' ) {
            return $this->replyWithStatus('addUserError', 'Name is required, please input user\'s name.', $request->except('password'));
        }
        if ($request->missing('email') or $request->input('email') == '' ) {
            return $this->replyWithStatus('addUserError', 'Email not provided, please input users\'s email.', $request->except('password'));
        }
        if ($request->missing('password') or $request->input('password') == '' ) {
            return $this->replyWithStatus('addUserError', 'Password not provided, please input users\'s password.', $request->except('password'));
        }
        $users = User::all();
        foreach ( $users as $u ) { // - Check if id is always unique -
            if ( $request->input('email') == $u->email ) {
                return $this->replyWithStatus('addUserError', 'Given email is already associated with another user.', $request->except('password'));
                //return back()->with('newUserStatus', 'Given email is already associated with another user.')->onlyInput('name');
            }
		}
		unset($u);
        unset($users);

        $pattern = [
        "name" => "/\S/",
        "email" => "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/",
        "password" => "/\S/",
        ];

        if ($request->input('name') > $lengths["name"]) {
            return $this->replyWithStatus('addUserError', 'Name can be maximum ' . lengths["name"] . ' caracters long.', $request->except('password'));
        };
        if ($request->input('email') > $lengths["email"]) {
            return $this->replyWithStatus('addUserError', 'Email cannot be more than ' . lengths["email"] . ' caracters long.', $request->except('password'));
        };
        if ($request->input('password') > $lengths["password"]) {
            return $this->replyWithStatus('addUserError', 'Password cannot be more than ' . lengths["password"] . ' caracters long.', $request->except('password'));
        };
        if ($request->input('password') < 3) {
            return $this->replyWithStatus('addUserError', 'Password must have more than 3 caracters.', $request->except('password'));
        };

        if (preg_match($pattern["name"], $request->input('name')) == 0) {
            return $this->replyWithStatus('addUserError', 'Name cannot be empty.', $request->except('password'));
        };
        if (preg_match($pattern["email"], $request->input('email')) == 0) {
            return $this->replyWithStatus('addUserError', 'Provided email is not an email, please correct', $request->except('password'));
        };
        if (preg_match($pattern["passowrd"], $request->input('password')) == 0) {
            return $this->replyWithStatus('addUserError', 'Password cannot be empty.', $request->except('password'));
        };

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
        ]);
        
        return $this->replyWithStatus('addUserStatus', 'User succesfully created.');
    }
}
