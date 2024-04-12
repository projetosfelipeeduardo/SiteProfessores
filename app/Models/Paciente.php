<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';

    protected $fillable = [
        'nome',
        'email',
        'idade',
        'telefone',
        // Adicione outros atributos conforme necessário
    ];
}
