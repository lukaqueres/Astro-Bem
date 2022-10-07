<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function dashboard(Request $request, $category = Null)
    {
        $user = Auth::user();
        return view('dashboard', ['user' => $user, 'category' => $category]);
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
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'User not found. Please check provided email and password, then try again.',
        ])->onlyInput('email');
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
