<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoaulaController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\CadeirasController;

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

//Route::get('/registo', function () {
//    return view('register');
//});

//Route::get('/login', function () {
//    return view('login');
//});

/*Route::get('/listaCadeiras', function () {
    return view('listaCadeiras');
});*/

Route::resource('/video_aula', VideoaulaController::class);
Route::resource('/comentario', ComentariosController::class);
Route::resource('/listaCadeiras', CadeirasController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>
