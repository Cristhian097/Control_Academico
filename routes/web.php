<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;
use crocodicstudio\crudbooster\helpers\CBRouter;

//CBRouter::route();

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

Route::resource('docentes', DocenteController::class )->middleware('auth');
Route::resource('datos', App\Http\Controllers\DatoController::class )->middleware('auth');
Route::resource('horarios', App\Http\Controllers\HorarioController::class )->middleware('auth');
Route::resource('horas', App\Http\Controllers\HoraController::class )->middleware('auth');

Route::get('/home', [DocenteController::class, 'menu'])->name('home');

