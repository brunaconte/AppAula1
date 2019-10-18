@extends('principal')

@section('cabecalho')
    <a href="{{url('/')}}">Home</a>
    <h5>(Seção Blade Cabeçalho)</h5>
    <h2>Alunos cadastrados</h2>
@endsection('cabecalho')

@section('conteudo')
    <h5>(Seção Blade Cabeçalho)</h5>
    <h2>Alunos Turma</h2>

    <table>
        <thead>
            <th> Nome </th>
            <th> Curso </th>
            <th> Turma </th>
            <th> Ações </th>
        </tread>
        <tbody>
                @foreach ($alunos as $dados)
                <tr>
                <td> {{$dados-> id}}</td>
                <td> {{$dados-> nome}}</td>
                <td> {{$dados-> curso}}</td>
               </tr>
                @endforeach
        </tbody>
    </table>
@endsection('conteudo')
