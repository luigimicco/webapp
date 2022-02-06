<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//! Email
Route::get('/contact', 'MailController@index')->name('contact.index');
Route::post('/contact', 'MailController@send')->name('contact.send');

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/', 'PrivateController@index')->name('home');

Route::middleware('auth')->name('admin.')->prefix('admin')->namespace('Admin')->group(function () {
    //! Admin Home
    Route::get('/', 'HomeController@index')->name('acp');
    //! Users
    Route::resource('/users', 'UserController');    
/*
    //! Posts res
    Route::resource('/posts', 'PostController');
    //! Categories res
    Route::resource('/categories', 'CategoryController');
*/    
    Route::get('/{any}', function () {
        return abort(404);
    });
});

Route::get('{any?}', function () {
    return view('guest.home');
})->where('any', '.*');

/*
Route::get('/home', 'HomeController@index')->name('home');
*/






