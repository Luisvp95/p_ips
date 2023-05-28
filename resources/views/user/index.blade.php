@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Lista de Usuarios</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body content-bg">
                    @if (session('success'))
                        <div class="alert {{ session('alert-type', 'alert-success') }} alert-dismissible fade show"
                            role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title"></h4>
                        <!--<i class="fas fa-ellipsis-v"></i>-->
                        @can('crear-usuario')
                            <div class="btn-group">
                                <a href="{{ route('users.create') }}" class="btn btn-primary ml-auto mb-2">Nuevo</a>
                            </div>
                        @endcan

                    </div>

                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    @canany(['detalle-usuario', 'editar-usuario', 'borrar-usuario'])
                                        <th>Acciones</th>
                                    @endcanany
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>
                                            <a href="{{ route('users.show', $user) }}">
                                                {{ $user->name }}</a>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if (!empty($user->getRoleNames()))
                                                @foreach ($user->getRoleNames() as $rolName)
                                                    <h5><span class="text-black">{{ $rolName }}</span></h5>
                                                @endforeach
                                            @endif
                                        </td>
                                        @canany(['detalle-usuario', 'editar-usuario', 'borrar-usuario'])
                                            <td>
                                                {!! Form::open(['route' => ['users.destroy', $user], 'method' => 'DELETE', 'id' => 'delete-form']) !!}
                                                <div class="btn-group" role="group">
                                                    {{-- @can('detalle-usuario')
                                                        <a href="{{route('users.show', $user) }}" type="button"
                                                            class="btn btn-info btn-sm rounded" title="Detalles">
                                                            <i class="far fa-eye small"></i> Detalles
                                                        </a>
                                                    @endcan--}}
                                                    @can('editar-usuario')
                                                        <a href="{{ route('users.edit', $user) }}" type="button"
                                                            class="btn btn-success btn-sm ml-2 rounded" title="Editar">
                                                            <i class="far fa-edit small"></i> Editar
                                                        </a>
                                                    @endcan
                                                    @can('borrar-usuario')
                                                        <button class="btn btn-danger btn-sm ml-2 rounded" type="button"
                                                            onclick="deleteConfirm('¿Está seguro de que desea eliminar este usuario?',{{ $user->id }})">
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
