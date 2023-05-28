<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group col-md-6">
            {{ Form::label('Sistema Operativo') }}
            {{ Form::text('description', $ip->description, ['class' => 'form-control mb-2' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
            {{ Form::label('area_id', 'Area') }}
            {{ Form::select('area_id', $areas, $ip->area_id, ['class' => 'form-control selectpicker', 'data-live-search' => 'true' . ($errors->has('area_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Area']) }}
            {!! $errors->first('area_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('Ip') }}
            {{ Form::text('ip', $ip->ip, ['class' => 'form-control' . ($errors->has('ip') ? ' is-invalid' : ''), 'placeholder' => 'Ip']) }}
            {!! $errors->first('ip', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('Estado') }}
            {{ Form::select('status', ['Ocupado' => 'Ocupado', 'Libre' => 'Libre'], $ip->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el estado']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>