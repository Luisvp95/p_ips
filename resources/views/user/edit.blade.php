@extends('adminlte::page')

@section('title', 'Editar Usuario')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')
<section class="content container-fluid">
    <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body content-bg">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Editar usuario</h4>
                        </div>
                        {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'PUT']) !!}
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" value="{{ old('name', $user->name) }}" name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Ingrese nombre de usuario">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input value="{{ old('email', $user->email) }}" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Ingrese correo electrónico">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="password"
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Ingrese contraseña">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Roles</label>
                            {!! Form::select(
                                'roles[]',
                                $roles,
                                [],
                                ['class' => 'form-control' . ($errors->has('roles') ? ' is-invalid' : ''),'name'=>'roles', 'placeholder' => 'Seleccione un rol']
                            ) !!}
                            
                             @if ($errors->has('roles'))
                             <div class="invalid-feedback">{{ $errors->first('roles') }}</div>
                         @endif
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                        <a href="{{ route('users.index') }}" class="btn btn-light">Cancelar</a>
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