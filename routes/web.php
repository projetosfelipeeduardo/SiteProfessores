<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/cadastropacientes', 'pacientes\CadastroPacientes@index')->name('cadastropacientes');
Route::get('/CadastrodePacientes', 'pacientes\CadastroPacientes@index')->name('Cadastro de Pacientes');
Route::get('/cadastrodeusuario', 'Cadastro\UsuarioCadastroController@index')->name('Cadastro de Usuario');
Route::get('/questionario', 'questionario\questionarioController@index')->name('Questionario');
Route::get('/cadastrarPacientes', 'questionario\questionarioController@cadastrarPacientes')->name('cadastrarPacientes');
