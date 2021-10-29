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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bomberos', [App\Http\Controllers\BomberosController::class, 'index'])->name('bomberos.index');
Route::get('/crear-bombero', [App\Http\Controllers\BomberosController::class, 'create'])->name('bomberos.create');
Route::post('/registrar-bombero', [App\Http\Controllers\BomberosController::class, 'store'])->name('bomberos.store');


Route::get('/vehiculos', [App\Http\Controllers\VehiculosController::class, 'index'])->name('vehiculos.index');
Route::get('/crear-vehiculo', [App\Http\Controllers\VehiculosController::class, 'create'])->name('vehiculos.create');
Route::post('/registrar-vehiculo', [App\Http\Controllers\VehiculosController::class, 'store'])->name('vehiculos.store');



Route::get('/estaciones', [App\Http\Controllers\EstacionesController::class, 'index'])->name('estaciones.index');
Route::get('/crear-estacion', [App\Http\Controllers\EstacionesController::class, 'create'])->name('estaciones.create');
Route::post('/registrar-estacion', [App\Http\Controllers\EstacionesController::class, 'store'])->name('estaciones.store');



Route::get('/incidentes', [App\Http\Controllers\IncidentesController::class, 'index'])->name('incidentes.index');
