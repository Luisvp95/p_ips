@extends('adminlte::page')

@section('title')
{{ $area->name ?? "{{ __('Show') Area" }}
   
@endsection
@section('content_header')
    <h1>Detalles</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Area</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('areas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $area->name }}
                        </div>
                        <div class="form-group">
                            <strong>Segmento de red:</strong>
                            {{ $area->segment }}
                        </div>
                        <div class="form-group">
                            <strong>Puerta de enlace:</strong>
                            {{ $area->gateway }}
                        </div>
                        <div class="form-group">
                            <strong>Mascara de red:</strong>
                            {{ $area->mask }}
                        </div>
                        <div class="form-group">
                            <strong>Rango de Ips:</strong>
                            {{ $area->range }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop