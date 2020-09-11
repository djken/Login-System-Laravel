<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route is going to the folder /admin/users (This is the URL to Access it) 
// Go to the controller on the admin namespace, and go to our UsersController
// Pass parameters in the route resource because we remove some resources in the UsersController
// WE open up an array, we say "except" and pass it a new array of what we don't want to include
/*
Route::resource('/admin/users', 'Admin\UsersController', ['except' => ['show', 'create', 'store']]);
*/

// We can remove the admin or Admin in the route
route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});