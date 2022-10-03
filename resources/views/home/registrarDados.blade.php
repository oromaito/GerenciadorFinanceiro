
@extends('adminlte::page')

@section('Registrar', 'Dashboard')

@section('content_header')
    <h1>Gerenciador</h1>
    <link rel="stylesheet" href="/css/Registro.css">
@stop

@section('content')
<div id="container">
    @include('home.includes.alerts')
    <form action="{{ Route('registrar.store')}}" method="post">
        @csrf
        <label for="salario">salário</label><br>
        <input type="number" name="salario" id="salario" class="form-control"><br>
        <label for="gastoPD">Gasto Por dia</label><br>
        <input type="number" name="gastoPD" id="gastoPD" class="form-control"><br>
        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>
    </form>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

