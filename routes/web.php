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

Route::get('/', [App\Http\Controllers\Principal::class, 'home'])->name('pagina-inicial');
Route::get('/sobre', [App\Http\Controllers\Sobre::class, 'about'])->name('pagina-sobre');

Route::get('/contato', [App\Http\Controllers\Contato::class, 'contato']);
Route::get('/aluno/boletim', [App\Http\Controllers\Aluno::class, 'boletim']);
Route::get('/professor/calendario', [App\Http\Controllers\Professor::class, 'calendario']);
Route::get('/professor/login', [App\Http\Controllers\Professor::class, 'login']);
Route::get('/professor/cronograma', [App\Http\Controllers\Professor::class, 'cronograma']);
Route::get('/aluno/declaração', [App\Http\Controllers\Aluno::class, 'declaração']);
Route::get('/aluno/matricula', [App\Http\Controllers\Aluno::class, 'matricula']);
Route::get('/aluno/login', [App\Http\Controllers\Aluno::class, 'login']);
Route::get('/aluno/solicitar', [App\Http\Controllers\Aluno::class, 'solicitação']);
Route::get('/aluno/ficha_de_desempenho', [App\Http\Controllers\Aluno::class, 'fichaDesempenho']);
Route::get('/aluno/email_institucional', [App\Http\Controllers\Aluno::class, 'emailInstituicional']);




