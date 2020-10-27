<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoaulaController;

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
    return view('cadeiraa');
});

Route::get('/biblioteca', function () {
    return view('biblioteca');
});

Route::get('/registo', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
Route::resource('cadeira', VideoaulaController::class);
