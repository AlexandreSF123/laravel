<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function show() {
        $alunos = [
            (object) ['nome' => 'Rattata', 'telefone' => '15997878451', 'email' => 'rattata@gmail.com'],
            (object) ['nome' => 'Atolas', 'telefone' => '15953533211', 'email' => 'ata@gmail.com'],
            (object) ['nome' => 'Ricardo', 'telefone' => '15997845221', 'email' => 'ricardo@gmail.com']
        ];
        return view('aluno', compact('alunos'));
    }
    function add($nome, $telefone, $email) {
        $aluno = (object) ['nome' => $nome, 'telefone' => $telefone, 'email' => $email];
        return view('alunoAdd', compact('aluno'));
        

    }
}
