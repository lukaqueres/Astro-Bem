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
        return back()->with($name, $message)->withInput($inputs);
    }

    public function add(Request $request)
    {

        $request->validate([ //$credentials =
            'name' => ['required', 'between:3,25'],
            'email' => ['required', 'email', 'unique:App\Models\User,email', 'between:3,35'],
            'password' => ['required', 'between:3,18'],
            'role' => [ Rule::in(['redaktor', 'administrator', 'developer']),],
            'avatar' => ['URL'], // - Avatar image url -
        ]);



        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'avatar' => $request->avatar,
        ]);

        return back()->withErrors([
            'status' => "User {$request->name} created with email as {$request->email}.",
        ])->noInput();
    }
}
