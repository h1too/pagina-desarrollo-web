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
Route::get('/index', function () {
    return view('index');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/productos', function () {
    return view('productos');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registro', function () {
    return view('registro');
});
Route::resource('usuario',UsuarioController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
