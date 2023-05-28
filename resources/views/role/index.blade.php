@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Roles</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Ip') }}
                        </span>

                         <div class="float-right">
                            <a href="{{ route('ips.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                              {{ __('Nuevo') }}
                            </a>
                          </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    @canany(['detalle-rol', 'editar-rol', 'borrar-rol'])
                                    <th>Acciones</th>
                                    @endcanany
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <th scope="row">{{ $role->id }}</th>
                                        <td>
                                            <a href="{{ route('roles.show', $role) }}">
                                                {{ $role->name }}</a>
                                        </td>
                                        @canany(['detalle-rol', 'editar-rol', 'borrar-rol'])
                                        <td>
                                            {!! Form::open(['route' => ['roles.destroy', $role], 'method' => 'DELETE', 'id' => 'delete-form']) !!}
                                            <div class="btn-group" role="group">
                                                {{-- @can('detalle-rol')
                                                    <a href="{{ route('roles.show', $role) }}" type="button"
                                                        class="btn btn-info btn-sm rounded" title="Detalles">
                                                        <i class="far fa-eye small"></i> Detalles
                                                    </a>
                                                @endcan --}}
                                                @can('editar-rol')
                                                    <a href="{{ route('roles.edit', $role) }}" type="button"
                                                        class="btn btn-success btn-sm ml-2 rounded" title="Editar">
                                                        <i class="far fa-edit small"></i> Editar
                                                    </a>
                                                @endcan
                                                @can('borrar-rol')
                                                    <button class="btn btn-danger btn-sm ml-2 rounded" type="button"
                                                        onclick="deleteConfirm('¿Está seguro de que desea eliminar este rol?',{{ $role->id }})">
                                                        <i class="fas fa-trash-alt small"></i> Eliminar
                                                    </button>
                                                @endcan
                    
                                            </div>
                                            {!! Form::close() !!}
                                        </td>
                                        @endcanany
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $ips->links() !!}
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    {!! Html::style('melody/vendors/css/vendor.bundle.addons.css') !!}

@stop

@section('js')
    <script> console.log('Hi!'); </script>

    {!! Html::script('melody/vendors/js/vendor.bundle.addons.js') !!}
    {!! Html::script('js/data-table.js') !!}


@stop

