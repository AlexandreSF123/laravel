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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

Route::prefix('/aluno')->group(function(){
    Route::get('/index', [App\Http\Controllers\Aluno::class, 'index'])->name('aluno.index');
    Route::post('/adicionar', [App\Http\Controllers\Aluno::class, 'adicionar'])->name('aluno.adicionar');
    Route::post('/remover', [App\Http\Controllers\Aluno::class, 'remover'])->name('aluno.remover');
    Route::post('/atualizar', [App\Http\Controllers\Aluno::class, 'atualizar'])->name('aluno.atualizar');
    Route::post('/consultar', [App\Http\Controllers\Aluno::class, 'consultar'])->name('aluno.consultar');
});



