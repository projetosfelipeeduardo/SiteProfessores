<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questionarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cod_pergunta');
            $table->string('resposta');
            $table->unsignedBigInteger('cod_paciente');
            $table->unsignedBigInteger('cod_usuario');
            $table->dateTime('data_questionario');
            $table->boolean('data_isretroativa');
            $table->dateTime('data_retroativa')->nullable();
            $table->unsignedBigInteger('cod_setor_pesquisa');
            $table->string('observacao')->nullable();
            $table->timestamps();

            $table->foreign('cod_pergunta')->references('id')->on('perguntas_descricao');
            $table->foreign('cod_paciente')->references('id')->on('dadospacientes');
            $table->foreign('cod_usuario')->references('id')->on('usuarios');
            $table->foreign('cod_setor_pesquisa')->references('id')->on('setores_pesquisa');
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('questionarios');
    }
};
