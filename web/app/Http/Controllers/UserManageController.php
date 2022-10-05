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
        if ($request->missing('name') or $request->input('name') == '' ) {
            return replyWithStatus('addUserError', 'Name is required, please input user\'s name.', $request->except('password'));
        }
        if ($request->missing('email') or $request->input('email') == '' ) {
            return replyWithStatus('addUserError', 'Email not provided, please input users\'s email.', $request->except('password'));
        }
        if ($request->missing('password') or $request->input('password') == '' ) {
            return replyWithStatus('addUserError', 'Password not provided, please input users\'s password.', $request->except('password'));
        }
        $users = User::all();
        foreach ( $users as $u ) { // - Check if id is always unique -
            if ( $request->input('email') == $u->email ) {
                return replyWithStatus('addUserError', 'Given email is already associated with another user.', $request->except('password'));
                //return back()->with('newUserStatus', 'Given email is already associated with another user.')->onlyInput('name');
            }
		}
		unset($u);
        unset($users);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
        ]);
        
        return return replyWithStatus('addUserStatus', 'User succesfully created.');
    }
}
