<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Principal::class, 'index'])->name('pagina-principal');
Route::get('/sobre', [App\Http\Controllers\Sobre::class, 'index'])->name('pagina-sobre');
Route::get('/Desenvolvimento-de-Sistemas', [App\Http\Controllers\DS::class, 'index'])->name('pagina-ds');
Route::get('/Meio-Ambiente', [App\Http\Controllers\Meio::class, 'index'])->name('pagina-meio');
Route::get('/Farmácia', [App\Http\Controllers\Farmacia::class, 'index'])->name('pagina-farmacia');
Route::get('/Administração', [App\Http\Controllers\Adm::class, 'index'])->name('pagina-adm');



