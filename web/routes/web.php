<?php
ob_start(); // - Part of code 419 fix -

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\UserManageController;
use App\Http\Controllers\DashboardController;

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

// URL::forceSchema('https');

Route::get('/about-us', function (Request $request) { // - About us page -
	return view('aboutUs');
})->name('aboutUs');

Route::get('/kosmiczna-szkola', function (Request $request) { // - About us page -
	return view('kosmicznaSzkola');
})->name('kosmicznaSzkola');

Route::get('/articles', function (Request $request) { // - About us page -
	return view('articles');
})->name('articles');

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
	'/dashboard/logout',
	[AuthenticateController::class, 'logout']
)->middleware('auth')->name('logout');

Route::post( // - Route `/dashboard/login` is named as 'login' route ( for later use ), in case of this route called call `login` function of `AutherticateController` Controller class -
	'/users/add',
	[UserManageController::class, 'add']
)->middleware('auth')->name('addUser');

// - Must be on bottom! -
Route::get( // - Route `/dashboard/{category}` if category is provided display category page -
	'/dashboard/accounts',
	[DashboardController::class, 'accounts']
)->middleware('auth')->name('accounts');

Route::get( // - Route `/dashboard/{category}` if category is provided display category page -
	'/dashboard/accounts/create',
	[DashboardController::class, 'accountsCreate']
)->middleware('auth')->name('accounts_create');

Route::get( // - Route `/dashboard/{category}` if category is provided display category page -
	'/dashboard',
	[DashboardController::class, 'dashboard']
)->middleware('auth')->name('dashboard');
