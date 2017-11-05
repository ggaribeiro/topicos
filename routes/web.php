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
    return view('home');
});

Route::get('sobre', function () {
    return view('sobre');
});

Route::get('usuarios/{user_id?}', function ($user_id = null) {
    return view('usuarios')->
                    with('user_id', $user_id);
});


