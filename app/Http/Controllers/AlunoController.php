<?php

namespace App\Http\Controllers;

use App\AlunoModel;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function listar(){
       $alunos = AlunoModel :: orderBy('nome')->get();
       return view('alunos')->with('alunos', $alunos);
    }
}
