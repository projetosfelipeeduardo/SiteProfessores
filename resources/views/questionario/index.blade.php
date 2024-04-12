@extends('adminlte::page')

@section('title', 'Sistema Hospitalar')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <h1 class="m-0 text-dark">Dados do paciente</h1>
            <br>
            <form method="POST" action="{{ route('cadastrarPacientes') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nome Completo</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Digite o nome completo">
                </div>

                <div class="form-group">
                    <label for="email">E-mail<span style="font-style: italic; font-size: smaller;">
                            (exemplo@dominio.com)</span></label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Digite o e-mail">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="idade">Idade</label>
                        <input type="text" class="form-control" id="idade" name="idade"
                            placeholder="Digite a idade">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="telefone">Telefone<span style="font-style: italic; font-size: smaller;"> (ex: (99)
                                9999-9999)</span></label>
                        <input type="text" class="form-control" id="telefone" name="telefone"
                            placeholder="Digite o telefone">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="sexo">Sexo</label>
                        <select class="form-control" id="sexo" name="sexo">
                            <option value="">Selecione o sexo</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tipopaciente">Tipo de paciente</label>
                    <select class="form-control" id="tipopaciente" name="tipopaciente">
                        <option value="">Selecione o tipo de paciente</option>
                        <option value="paciente">Paciente</option>
                        <option value="acompanhante">Acompanhante</option>
                        <option value="outros">Outros</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="setor">Setor</label>
                    <select class="form-control" id="setor" name="setor">
                        <option value="">Selecione o setor</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="leito">Leito</label>
                    <select class="form-control" id="leito" name="leito">
                        <option value="">Selecione o leito</option>
                    </select>
                </div>

                <!-- Adicione mais campos conforme necessário -->

                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
@stop
