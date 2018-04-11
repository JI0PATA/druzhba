<?php

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
    return view('index');
})->name('home');

Auth::routes();

Route::post('/login', 'Auth\LoginController@login')->middleware('AdminLogin');

Route::prefix('admin')->middleware('AdminPanel')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin');
});

Route::get('/logout', function() {
    Request::session()->forget('admin');

    return redirect()->route('home');
});
