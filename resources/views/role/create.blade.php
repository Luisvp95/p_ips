@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar Ip</h1>
@stop

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body content-bg">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de roles</h4>
                    </div>
                    {!! Form::open(['route'=>'roles.store', 'method'=>'POST']) !!}
                    @include('role.form')
                    <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <a href="{{route('roles.index')}}" class="btn btn-light">Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    {!! Html::style('select/dist/css/bootstrap-select.min.css') !!}

@stop

@section('js')
    <script> console.log('Hi!'); </script>
    {!! Html::script('select/dist/js/bootstrap-select.min.js') !!}

@stop

