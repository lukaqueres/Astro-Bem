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
        if ($request->missing('name') or $request->input('name') == '' ) {
            return back()->with('status', 'Name is required, please input user\'s name.');
        }
        if ($request->missing('email') or $request->input('email') == '' ) {
            return back()->with('status', 'Email not provided, please input users\'s email.');
        }
        if ($request->missing('password') or $request->input('password') == '' ) {
            return back()->with('status', 'Password not provided, please input users\'s password.');
        }
        $data['name'] = 'Test';
        $data['email'] = 'test@tes';
        $data['password'] = '123';
        
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']), 
        ]);
        
        //DB::table('users')->insert(['name' => ‘admin’, 'email' => 'admin@email.com', 'password' => Hash::make('Admin@123'),]);
        //DB::table('users')->insert(['name'=>'Test','email'=>'test@tes','password'=>Hash::make('123')]);
        return back()->with('newUserStatus', 'User created.');
    }
}
