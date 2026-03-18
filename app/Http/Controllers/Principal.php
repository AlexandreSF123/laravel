<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
      echo 'Página Principal';

    }
    function contato(string $nome) {
    //    echo "o nome desse contato é: $nome";
        $contato = [
        "nome" => $nome
 ];
        return view('contato', $contato);
    }
    function contatoNomeCompleto(string $nome, string $sobrenome) {
        echo "o nome completo é: $nome $sobrenome";
    }
    function assunto(string $nome, string $sobrenome, string $assunto) {
        echo "<h1>Contato: $nome $sobrenome </h1>";
        echo "<marquee>$assunto</marquee>";
    }
    function registro(string $nome, string $sobrenome, string $assunto, string $email, string $telefone = 'Telefone não informado') {
        echo "<h1>Contato: $nome $sobrenome </h1>";
        echo "<h2>Email: $email </h2>";
        echo "<h2>Telefone: $telefone </h2>";
        echo "<marquee>$assunto</marquee>";
    }



    
}


