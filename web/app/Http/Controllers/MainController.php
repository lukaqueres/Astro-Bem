<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
    /*
    public function view(Request $request)
    {
        $data = array();
        $data['id']=$request->id;
        if ($data['id'] == 0) {
            return redirect()->route('manage');
        }
        return view('main', $data);
    }*/
}
