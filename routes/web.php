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
