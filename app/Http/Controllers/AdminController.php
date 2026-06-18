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
                      'email' => 'required|min:11|max:255',
                      'telefone' => 'required|min:11|max:14',
                      'cpf' => 'required|min:12|max:12',
                      'usuario' => 'required|min:3|max:255',
                      'senha' => 'required|min:6|max:15',
                      'status' => 'required',
                  ],
                  [
                      'nome.required' => 'O campo nome é obrigatório.',
                      'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                      'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                      'email.required' => 'O campo email é obrigatório.',
                      'email.min' => 'O campo email deve conter no mínimo 3 caracteres.',
                      'email.max' => 'O campo email deve conter no máximo 255 caracteres.',
                      'telefone.required' => 'O campo telefone é obrigatório.',
                      'telefone.min' => 'O campo telefone deve conter no mínimo 3 caracteres.',
                      'telefone.max' => 'O campo telefone deve conter no máximo 255 caracteres.',
                      'cpf.required' => 'O campo cpf é obrigatório.',
                      'cpf.min' => 'O campo cpf deve conter no mínimo 3 caracteres.',
                      'cpf.max' => 'O campo cpf deve conter no máximo 255 caracteres.',
                      'usuario.required' => 'O campo usuario é obrigatório.',
                      'usuario.min' => 'O campo usuario deve conter no mínimo 3 caracteres.',
                      'usuario.max' => 'O campo usuario deve conter no máximo 255 caracteres.',
                      'senha.required' => 'O campo senha é obrigatório.',
                      'senha.min' => 'O campo senha deve conter no mínimo 3 caracteres.',
                      'senha.max' => 'O campo senha deve conter no máximo 255 caracteres.',
                      'status.required' => 'O campo status é obrigatório.',
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
