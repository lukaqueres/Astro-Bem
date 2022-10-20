<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller {
    public function accounts(Request $request)
    {
        $user = Auth::user();
        return view('dashboard.accounts', ['user' => $user]);
    }

    public function accountsCreate(Request $request)
    {
        $user = Auth::user();
        return view('dashboard.accountCreate', ['user' => $user]);
    }

    public function dashboard(Request $request)
    {
        $user = Auth::user();
        return view('dashboard', ['user' => $user]);
    }

}
