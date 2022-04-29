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
    return view('auth.login');
});

Auth::routes();
Auth::routes(['login' => 'auth.login']);

Route::group(['middleware' => 'web'], function () {

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/index', 'MainController@index');
Route::get('/index', 'MainController@index');

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/reset', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return '<h1>Cleared</h1>';
});

});