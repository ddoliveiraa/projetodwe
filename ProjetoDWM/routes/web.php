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
    return view('index');
});

Route::get('/cadeira', function () {
    return view('cadeira');
});

Route::get('/biblioteca', function () {
    return view('biblioteca');
});

<<<<<<< HEAD
Route::get('/registo', function () {
    return view('register');
});

=======
Route::get('/login', function () {
    return view('login');
});
>>>>>>> 4ce3ad47e26cd300b5fba223c898f603e715a08c
