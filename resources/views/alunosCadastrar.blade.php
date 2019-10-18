@extends('principal')

<a href="{{url('/')}}">Home</a>

@section('cabecalho')
    <h2>Cadastrados Alunos</h2>
@endsection('cabecalho')

@section('conteudo')

<form action="{{action('AlunoController@salvar', 0)}}" method="POST">
    <input type="hidden" name="" value=""/>
    <label> Nome </label>
    <input type="text" name="nome"/>
    <label> Curso </label>
    <input type="text" name="curso"/>
    <label> Curso </label>
    <input type="text" name="cursoss"/>


</form>
@endsection('conteudo')
