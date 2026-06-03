<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfessorController extends Controller
{    
    function index(){ 
    $professor = new \App\Models\ProfessorModel();

    return view('professor.index', ['professores'=>$professor::all()]);
}

    function add(Request $dados) { 
        $validator = Validator::make(
            $dados->all(),
              [
                  'nome' => 'required|min:3|max:255',
                  'email' => 'required|min:3|max:5',
                
              ],
              [
                  'nome.required' => 'O campo nome é obrigatório.',
                  'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                  'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                  'periodo.required' => 'O campo periodo é obrigatório.',
                  'periodo.min' => 'O campo periodo deve conter no mínimo 3 caracteres.',
                  'periodo.max' => 'O campo periodo deve conter no máximo 255 caracteres.',
              ]
      );

      if ($validator->fails()) {
          return redirect()
              ->route('curso.index')
              ->withErrors($validator)
              ->withInput();
      }
        $professor = new \App\Models\ProfessorModel();
        $professor::create($dados->all());
   
    				//RECUPERANDO TODOS ALUNOS DO BANCO E ENVIANDO PARA A VIEW
				
                    $professores = new \App\Models\ProfessorModel();

                    return view('professor.index', ['success'=>'Cadastrado!', 'professores'=>$professores::all()]);
      } 
      function remove(string $id) {
        $professor = new \App\Models\ProfessorModel();
        $professor::destroy($id);

        return view('professor.index', ['success'=>'Removido!', 'professores'=>$professor::all()]);

    } 
    function atualizar(string $id) {
        $professor = new \App\Models\ProfessorModel();
        $professor = $professor::find($id);

        return view('professor.atualizar', ['professor'=>$professor]);
    }
    function save(Request $dados) {
        $professor = new \App\Models\ProfessorModel();
        $professor = $professor::find($dados->id);
        $professor->update($dados->all());

        return view('professor.index', ['success'=>'Atualizado!', 'professores'=>$professor::all()]);
    }   
       
}
