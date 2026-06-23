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


Route::prefix('/aluno')->group(function(){
    Route::get('/index', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.index');
    Route::post('/add', [App\Http\Controllers\AlunoController::class, 'add'])->name('aluno.add');
    Route::post('/remove', [App\Http\Controllers\AlunoController::class, 'remove'])->name('aluno.remove');
    Route::post('/edit', [App\Http\Controllers\AlunoController::class, 'edit'])->name('aluno.edit');
    Route::get('/list', [App\Http\Controllers\AlunoController::class, 'list'])->name('aluno.list');
}); 
