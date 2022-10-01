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
        $user = new User;
        $user->name = 'test',
        $user->email = 'test@tes',
        $user->password = 'test',
        return back()->with('status', 'User created.');
    }
}
