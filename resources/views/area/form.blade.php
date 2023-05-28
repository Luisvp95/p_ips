<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group col-md-6">
            {{ Form::label('nombre') }}
            {{ Form::text('name', $area->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('segmento de red') }}
            {{ Form::text('segment', $area->segment, ['class' => 'form-control' . ($errors->has('segment') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese segmento de red']) }}
            {!! $errors->first('segment', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('puerta de enlace') }}
            {{ Form::text('gateway', $area->gateway, ['class' => 'form-control' . ($errors->has('gateway') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese puerta de enlace']) }}
            {!! $errors->first('gateway', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('mascara de red') }}
            {{ Form::text('mask', $area->mask, ['class' => 'form-control' . ($errors->has('mask') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese máscara de red']) }}
            {!! $errors->first('mask', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('rango de ips disponibles') }}
            {{ Form::text('range', $area->range, ['class' => 'form-control' . ($errors->has('range') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese rango de ip disponibles']) }}
            {!! $errors->first('range', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>