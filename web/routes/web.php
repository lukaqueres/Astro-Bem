<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthenticateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function (Request $request) { // - `home.blade.php` view will be returned in case of request url path `/` -
    return view('home');
});

Route::get( // - Route `/pane/login` is named as 'login' route ( for later use ), in case of this route called call `login` function of `AutherticateController` Controller class -
    '/dashboard/login',
    [AuthenticateController::class, 'authenticate']
)->name('login'); 

Route::get( // - Route `/pane/login` is named as 'login' route ( for later use ), in case of this route called call `login` function of `AutherticateController` Controller class -
    '/dashboard',
    [AuthenticateController::class, 'dashboard']
)->middleware('auth')->name('dashboard');
