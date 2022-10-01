<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\User;

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
        User::create([
            'name' => 'Me',
            'email' => 'test@tes',
            'password' => Hash::make('123'),
        ]);
        return back()->with('status', 'User created.');
    }
}
