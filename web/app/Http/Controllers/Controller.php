<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class MainController extends Controller
{
    public function index()
    {
        return view('main');
    }
    
    public function articles(Request $request)
    {
        return view('articles');
    }
    
    public function aboutUs(Request $request)
    {
        return view('aboutUs');
    }
}
