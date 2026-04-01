<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show() {
        //crie um array de objetos com as seguintes propriedades: nome e cpf
        $professores = [
            (object) ['nome' => 'Professor 1', 'cpf' => '123.456.789-00'],
            (object) ['nome' => 'Professor 2', 'cpf' => '987.654.321-00'],
            (object) ['nome' => 'Professor 3', 'cpf' => '111.222.333-44']
        ];
        return view('professor', compact('professores'));

    }
}
