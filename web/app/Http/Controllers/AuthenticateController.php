<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('dashboard');
    }

    public function login(Request $request)
    {
        if (Auth::check()) { // - If user is authenticated -
            return redirect()->route('dashboard');
        }
        return view('login');
    }
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        /*
        if ($request->missing('email') or $request->missing('password')) {
            return response()->json([
                    'error_message' => 'Invalid authenticate request',
                    'code' => 400
            ]);
        }
        */
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            Auth::login($user);
            //return back()->with('alert', 'User found.');
            return redirect()->intended('dashboard');
            //return redirect()->route('home');
        }

        //return back()->withErrors([
        //    'email' => 'The provided credentials do not match our records.',
        //])->onlyInput('email');
        return back()->with('alert', 'User not found. Please check provided email and password, then try again.');
    }

    /**
 * Log the user out of the application.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function logout(Request $request)
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
