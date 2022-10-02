<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ManageController extends Controller {

    public function addUser(Request $request)
    {
        /*
        if ($request->missing('email') or $request->missing('password')) {
            return response()->json([
                    'error_message' => 'Invalid authenticate request',
                    'code' => 400
            ]);
        }
        */
        $data['name'] = 'Test';
        $data['email'] = 'test@tes';
        $data['password'] = '1234567890';
        /*
        $user = new User;
        $user->name = 'Test';
        $user->email ='test@tes';
        $user->password = encrypt('123');
        $user->save();
        */
        
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'], //Hash::make($data['password'])
        ]);
        
        //DB::table('users')->insert(['name' => ‘admin’, 'email' => 'admin@email.com', 'password' => Hash::make('Admin@123'),]);
        //DB::table('users')->insert(['name'=>'Test','email'=>'test@tes','password'=>Hash::make('123')]);
        //return back()->with('alert', 'User created.');
        return redirect('login')->with('alert', 'User created.');
    }
}
