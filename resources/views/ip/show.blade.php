@extends('adminlte::page')

@section('title')
{{ $ip->description ?? "{{ __('Show') Ip" }}
   
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
                            <span class="card-title">{{ __('Detalles') }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ips.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>S.O:</strong>
                            {{ $ip->description }}
                        </div>
                        <div class="form-group">
                            <strong>Área:</strong>
                            {{ $ip->area->name }}
                        </div>
                        <div class="form-group">
                            <strong>Ip:</strong>
                            {{ $ip->ip }}
                        </div>
                        <div class="form-group">
                            <strong>Segmento de red:</strong>
                            {{ $ip->area->segment }}
                        </div>
                        <div class="form-group">
                            <strong>Puerta de enlace:</strong>
                            {{ $ip->area->gateway }}
                        </div>
                        <div class="form-group">
                            <strong>Mascara:</strong>
                            {{ $ip->area->mask }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $ip->status }}
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