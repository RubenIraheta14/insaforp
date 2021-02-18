<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\AsistenciaController;

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

//Route::apiResource('/cursos', CursosController::class);
//Route::apiResource('/asistencia', AsistenciaController::class);
Route::apiResource('/asistencia', App\Http\Controllers\AsistenciaController::class);


Route::apiResource('/cursos', App\Http\Controllers\CursosController::class);


