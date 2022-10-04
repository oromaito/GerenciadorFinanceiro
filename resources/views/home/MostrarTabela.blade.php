@extends('adminlte::page')

@section('Mostrar', 'Dashboard')

@section('content_header')
    <h1>Gerenciador</h1>
    <link rel="stylesheet" href="/css/Registro.css">
@stop

@section('content')
    <table class="rTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Salário</th>
                <th>Gasto por dia</th>
            </tr>
        </thead>
    @foreach ($finanças as $finança)
            <tbody>
                <tr>
                    <td>{{$finança->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$finança->salario}}</td>
                    <td>{{$finança->gastoPD}}</td>
                </tr>
            </tbody>
    @endforeach
    </table>
    <div class="content">
        <table class="rTable">

        </table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
