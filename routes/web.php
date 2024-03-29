<?php

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

use Illuminate\Routing\Router;

Route::get('/professores', function () {
    return view('professores');
});

Route::get('/alunos_', function () {
    return view('alunos');
});

Route::get('/', function () {
    return view('main');
});

Route::get('/alunos', 'AlunoController@listar');
