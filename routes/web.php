<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login', ['name' => 'James']);
})->name('login');

Route::get('/logout', 'UserController@logout')->name('logout');

Route::post('/do_register', 'UserController@register_user');
Route::post('/do_login', 'UserController@auth');

Route::view('/register', 'register')->name('register');
