<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function index(){
        return view('index');
    }

    function adicionar(Request $dados) {
        $alunos = new \App\Models\AlunoModel();
        $alunos::create($dados->all());
        return view('index', ['sucesso'=>'Aluno cadastrado!']);
    }

    function remover(Request $dados) {}

    function atualizar(Request $dados) {}
    
    function consultar() {}

}