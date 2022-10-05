
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
            <div class="alert alert-danger" id="message" style="display: none">
            </div>
        <label for="salario">salário</label><br>
        <input type="text" name="salario" id="salario" class="form-control" step="0.010"><br>
        <label for="gastoPD">Gasto Por dia</label><br>
        <input type="text" name="gastoPD" id="gastoPD" class="form-control"><br>
        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save" id="btn"/>
        <script>
            message = document.getElementById("message")
            btn = document.getElementById('btn')
            salario = document.getElementById('salario')
            gastoPD = document.getElementById('gastoPD')
            btn.addEventListener('click', function(){
                if(gastoPD.value > salario.value)
                {
                    message.style="dsiplay: block";
                    message.innerText = "o gasto não pode ser maior que o valor inicial"
                    btn.disabled = true;
                }
            })
            gastoPD.addEventListener('click', function(){
                btn.disabled = false;
            })
            salario.addEventListener('click', function(){
                btn.disabled = false;
            })
        </script>
    </form>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

