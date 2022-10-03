<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\UserManageController;

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
})->name('home');

Route::get( // - Route `/dashboard/login` is named as 'login' route ( for later use ), in case of this route called call `login` function of `AutherticateController` Controller class -
	'/dashboard/login',
	[AuthenticateController::class, 'login']
)->name('login'); 

Route::post( // - Route `/dashboard/authenticate` is named as 'login' route ( for later use ), in case of this route called call `login` function of `AutherticateController` Controller class -
	'/dashboard/authenticate',
	[AuthenticateController::class, 'authenticate']
)->name('authenticate'); 

Route::get( // - Route `/dashboard/login` is named as 'login' route ( for later use ), in case of this route called call `login` function of `AutherticateController` Controller class -
	'/dashboard/{category?}',
	[AuthenticateController::class, 'dashboard']
)->middleware('auth')->name('dashboard');

Route::get( // - Route `/dashboard/login` is named as 'login' route ( for later use ), in case of this route called call `login` function of `AutherticateController` Controller class -
	'/dashboard/logout',
	[AuthenticateController::class, 'logout']
)->middleware('auth')->name('logout');


Route::get( // - Route `/dashboard/login` is named as 'login' route ( for later use ), in case of this route called call `login` function of `AutherticateController` Controller class -
	'/manage/adduser',
	[ManageController::class, 'addUser']
)->name('createUser');

Route::post( // - Route `/dashboard/login` is named as 'login' route ( for later use ), in case of this route called call `login` function of `AutherticateController` Controller class -
	'/users/add',
	[UserManageController::class, 'add']
)->name('addUser');
