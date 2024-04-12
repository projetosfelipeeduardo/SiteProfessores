<?php

namespace App\Http\Controllers\Cadastro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioCadastroController extends Controller
{
    public function index()
    {
        return view('cadastro.usuario');
    }

}
