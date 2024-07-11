<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_cuidad_destino') }}
            {{ Form::text('nombre_cuidad_destino', $destino->nombre_cuidad_destino, ['class' => 'form-control' . ($errors->has('nombre_cuidad_destino') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cuidad Destino']) }}
            {!! $errors->first('nombre_cuidad_destino', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pais_destino') }}
            {{ Form::text('pais_destino', $destino->pais_destino, ['class' => 'form-control' . ($errors->has('pais_destino') ? ' is-invalid' : ''), 'placeholder' => 'Pais Destino']) }}
            {!! $errors->first('pais_destino', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $destino->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estatus') }}
            {{ Form::text('estatus', $destino->estatus, ['class' => 'form-control' . ($errors->has('estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }}
            {!! $errors->first('estatus', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>