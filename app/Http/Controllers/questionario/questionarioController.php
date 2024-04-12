<?php

namespace App\Http\Controllers\questionario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class questionarioController extends Controller
{
    public function index()
    {
        return view('questionario.index');
    }
    public function cadastrarPacientes(Request $request)
    {
           // Valide os dados do formulário
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:pacientes,email',
                'idade' => 'required|integer',
                'telefone' => 'required|string|max:20',
                'sexo' => 'required|in:masculino,feminino,outros',
                'tipopaciente' => 'required|in:paciente,acompanhante,outros',
                // Adicione validações adicionais conforme necessário
            ]);

            // Crie um novo paciente com os dados validados
            $paciente = new Paciente();
            $paciente->fill($validatedData); // Preencha o modelo com os dados validados
            dd($paciente);
            $paciente->save(); // Salve o paciente no banco de dados

            // Redirecione ou retorne uma resposta conforme necessário
            return redirect()->route('home')->with('success', 'Paciente cadastrado com sucesso!');
        }

    public function store(Request $request)
    {
        $telefone = $request->validate([
            'telefone' => 'required|regex:/^\(\d{2}\) \d{4,5}-\d{4}$/',
        ]);

    }
}
