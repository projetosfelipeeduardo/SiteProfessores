<?php

namespace App\Http\Controllers\pacientes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cadastroPacientes extends Controller
{
    public function index()
    {
        return view('pacientes.cadastro');
    }
}
