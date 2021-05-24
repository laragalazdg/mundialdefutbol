<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\ClubController;
//use App\Http\Controllers\JugadorController;
//use App\Http\Controllers\HomeController;

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


Route::get('paises',[PaisController::class, 'index'])->name('paises.index');

Route::get('paises/{pais}',[PaisController::class, 'show'])->name('paises.show');

Route::get('clubes',[ClubController::class, 'index'])->name('clubes.index');

Route::get('clubes/{club}',[ClubController::class, 'show'])->name('clubes.show');

Route::get('/', function () {
    return view('home');
})->name('home');
