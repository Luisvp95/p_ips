<div class="form-group">
    <label for="name">Nombre del rol</label>
    {{-- {!! Form::text('name', null, array('class'=>'form-control'))!!} --}}
    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"
        placeholder="Ingrese nombre del rol">
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label>Permisos para este rol</label>
    @if ($errors->has('permission'))
        <div class="invalid-feedback d-block">{{ $errors->first('permission') }}</div>
    @endif
</div>

<div class="form-group">
    <label>{{ Form::checkbox('select_all', 1, false, ['id' => 'select_all']) }} Seleccionar todo</label>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group checkbox-grid">
            <h3 class="h5 mb-4">Permisos Usuario</h3>
            @foreach ($userPermission as $id => $name)
                <label>
                    {{ Form::checkbox('permission[]', $id, false, ['class' => 'name' . ($errors->has('permission') ? ' is-invalid' : ''), 'name' => 'permission[]']) }}
                    {{ Form::label($name, $name, ['class' => 'form-check-label']) }}
                </label>
                <br>
            @endforeach

        </div>

    </div>
    <div class="col-md-3">
        <div class="form-group checkbox-grid">
            <h3 class="h5 mb-4">Permisos de rol</h3>
            @foreach ($rolPermission as $id => $name)
                <label> {{ Form::checkbox('permission[]', $id, false, ['class' => 'name']) }}
                    {{ Form::label($name, $name, ['class' => 'form-check-label']) }}</label> <br>
            @endforeach
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group checkbox-grid">
            <h3 class="h5 mb-4">Permisos de persona</h3>
            @foreach ($personPermission as $id => $name)
                <label> {{ Form::checkbox('permission[]', $id, false, ['class' => 'name']) }}
                    {{ Form::label($name, $name, ['class' => 'form-check-label']) }}</label> <br>
            @endforeach
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group checkbox-grid">
            <h3 class="h5 mb-4">Permisos de categoria</h3>
            @foreach ($categoryPermission as $id => $name)
                <label> {{ Form::checkbox('permission[]', $id, false, ['class' => 'name']) }}
                    {{ Form::label($name, $name, ['class' => 'form-check-label']) }}</label> <br>
            @endforeach
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="form-group checkbox-grid">
            <h3 class="h5 mb-4">Permisos de curso</h3>
            @foreach ($cursePermission as $id => $name)
                <label> {{ Form::checkbox('permission[]', $id, false, ['class' => 'name']) }}
                    {{ Form::label($name, $name, ['class' => 'form-check-label']) }}</label> <br>
            @endforeach
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group checkbox-grid">
            <h3 class="h5 mb-4">Permisos de contenido</h3>
            @foreach ($contenidoPermission as $id => $name)
                <label> {{ Form::checkbox('permission[]', $id, false, ['class' => 'name']) }}
                    {{ Form::label($name, $name, ['class' => 'form-check-label']) }}</label> <br>
            @endforeach
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group checkbox-grid">
            <h3 class="h5 mb-4">Permisos de horarios</h3>
            @foreach ($horarioPermission as $id => $name)
                <label> {{ Form::checkbox('permission[]', $id, false, ['class' => 'name']) }}
                    {{ Form::label($name, $name, ['class' => 'form-check-label']) }}</label> <br>
            @endforeach
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group checkbox-grid">
            <h3 class="h5 mb-4">Permisos de autor</h3>
            @foreach ($autorPermission as $id => $name)
                <label> {{ Form::checkbox('permission[]', $id, false, ['class' => 'name']) }}
                    {{ Form::label($name, $name, ['class' => 'form-check-label']) }}</label> <br>
            @endforeach
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group checkbox-grid">
            <h3 class="h5 mb-4">Permisos de libro</h3>
            @foreach ($libroPermission as $id => $name)
                <label> {{ Form::checkbox('permission[]', $id, false, ['class' => 'name']) }}
                    {{ Form::label($name, $name, ['class' => 'form-check-label']) }}</label> <br>
            @endforeach
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group checkbox-grid">
            <h3 class="h5 mb-4">Permisos de prestamo de libro</h3>
            @foreach ($prestamoPermission as $id => $name)
                <label> {{ Form::checkbox('permission[]', $id, false, ['class' => 'name']) }}
                    {{ Form::label($name, $name, ['class' => 'form-check-label']) }}</label> <br>
            @endforeach
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group checkbox-grid">
            <h3 class="h5 mb-4">Permisos de venta de curso</h3>
            @foreach ($salePermission as $id => $name)
                <label> {{ Form::checkbox('permission[]', $id, false, ['class' => 'name']) }}
                    {{ Form::label($name, $name, ['class' => 'form-check-label']) }}</label> <br>
            @endforeach
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group checkbox-grid">
            <h3 class="h5 mb-4">Permisos de reporte</h3>
            @foreach ($reportPermission as $id => $name)
                <label> {{ Form::checkbox('permission[]', $id, false, ['class' => 'name']) }}
                    {{ Form::label($name, $name, ['class' => 'form-check-label']) }}</label> <br>
            @endforeach
            @foreach ($report1Permission as $id => $name)
    <label>{{ Form::checkbox('permission[]', $id, false, ['class' => 'name']) }}
        {{ Form::label($name, $name, ['class' => 'form-check-label']) }}</label> <br>
@endforeach
        </div>
    </div>
    

</div>
