@extends('adminlte::page')

@section('Mostrar', 'Dashboard')

@section('content_header')
    <h1>Tabela de campanhas</h1>
    <link rel="stylesheet" href="/css/Registro.css">
@stop

@section('content')
    <table class="rTable">
        <thead>
            <tr>
                <th>dinheiroTotal</th>
                <th>Gasto por dia</th>
                <th>valor atual</th>
                <th>Duração</th>
                <th>data de inicio</th>
                <th>Status</th>
            </tr>
        </thead>
    @foreach ($finanças as $finança)
            <tbody>
                <tr>
                    <td>{{$finança->salario}}</td>
                    <td>{{$finança->gastoPD}}</td>
                    <td>
                        {{$finança->valorAtual}}
                    </td>
                    <td>
                        {{$finança->duração}}
                    </td>
                    <td>
                        {{$finança->created_at->format('d/m/y')}}
                    </td>
                    <td>{{$finança->status}}</td>
                </tr>
            </tbody>
    @endforeach
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
