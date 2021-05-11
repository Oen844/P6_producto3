<?php

use App\Http\Controllers\AsignaturaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CoursesController;

use App\Http\Controllers\UserController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//controlador de todo lo referente a cursos
Route::resource('courses', CoursesController::class);

//controlador de los usuarios
Route::resource('user', UserController::class);

Route::resource('asignaturas', App\Http\Controllers\AsignaturaController::class);


