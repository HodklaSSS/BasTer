<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/tambah', [\App\Http\Controllers\TambahDataController::class, 'pginsert'])->name('home.tambah');

Route::post('/home/tambah', [\App\Http\Controllers\TambahDataController::class, 'insert'])->name('insert');

Route::post('/home/verif', [App\Http\Controllers\HomeController::class, 'verif'])->name('home.verif');

Route::delete('/home/delete', [App\Http\Controllers\HomeController::class, 'verif'])->name('delete');