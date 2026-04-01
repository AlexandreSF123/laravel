<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Componente extends Controller
{
    function show() {
        $componentes = [
            (object) ['nome' => 'História', 'horário' => '12:20'],
            (object) ['nome' => 'Mátematica', 'horário' => '13:20'],
            (object) ['nome' => 'Socoilogia', 'horário' => '14:20']
        ];
        return view('componente', compact('componentes'));
    }
}
