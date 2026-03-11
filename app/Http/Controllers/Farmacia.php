<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Farmacia extends Controller
{
    function index(){
        return view('pagina-farmacia');
    }

    
}