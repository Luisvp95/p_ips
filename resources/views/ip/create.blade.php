@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar Ip</h1>
@stop

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Create') }} Ip</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('ips.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf

                        @include('ip.form')

                    </form>
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