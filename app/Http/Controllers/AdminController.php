<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function index(){ 
        $admin = new \App\Models\AdminModel();
    
        return view('admin.index', ['admins'=>$admin::all()]);
    }
    
        function add(Request $dados) { 
            $validator = Validator::make(
                $dados->all(),
                  [
                      'nome' => 'required|min:3|max:255',
                  ],
                  [
                      'nome.required' => 'O campo nome é obrigatório.',
                      'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                      'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                  ]);
            $admin = new \App\Models\AdminModel();
            $admin::create($dados->all());
       
                        //RECUPERANDO TODOS ALUNOS DO BANCO E ENVIANDO PARA A VIEW
                    
                        $admins = new \App\Models\AdminModel();
    
                        return view('admin.index', ['success'=>'Cadastrado!', 'admins'=>$admins::all()]);
          } 
          function remove(string $id) {
            $admin = new \App\Models\AdminModel();
            $admin::destroy($id);
    
            return view('admin.index', ['success'=>'Removido!', 'admins'=>$admin::all()]);
    
        } 
        function atualizar(string $id) {
            $admin = new \App\Models\AdminModel();
            $admin = $admin::find($id);
    
            return view('admin.atualizar', ['admin'=>$admin]);
        }
        function save(Request $dados) {
                                    //VALIDAÇÃO DOS DADOS
        //mínimo 3 caracteres para o nome e é required (obrigatório)
        $dados->validate([
            'nome' => 'required|min:3'
        ]);
            $admin = new \App\Models\AdminModel();
            $admin = $admin::find($dados->id);
            $admin->update($dados->all());
    
            return view('admin.index', ['success'=>'Atualizado!', 'admins'=>$admin::all()]);
        }   
}
