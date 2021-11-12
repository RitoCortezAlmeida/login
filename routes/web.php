<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Neurolink;
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
Route::get('/log', [Neurolink::class, 'log'])->name('datossesion');
Route::post('/inicioS', [Neurolink::class, 'inicioS'])->name('iniciosesion');
Route::post('/sincontra', [Neurolink::class, 'sincontraseña'])->name('nocontra');
Route::post('/sincorreo', [Neurolink::class, 'sincorreo'])->name('nocorreo');