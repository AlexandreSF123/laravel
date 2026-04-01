<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso extends Controller
{
    function show() {
        $cursos = [
            (object) ['nome' => 'Desenvolvimento de Sistemas', 'periodo' => 'Noturno'],
            (object) ['nome' => 'Redes de Computadores', 'periodo' => 'Matutino'],
            (object) ['nome' => 'Segurança da Informação', 'periodo' => 'Vespertino']
        ];

        return view('curso', compact('cursos'));
    }
}
