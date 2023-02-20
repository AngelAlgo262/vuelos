<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('aerolinea') }}
            {{-- <select class="form-control" name="aerolinea_id" required>
                <option disabled selected>Seleccione una opcion</option>
                <option value="{{ $aerolineas }}">{{ $aerolineas }}</option>
                
            </select> --}}
            <div class="form-control">
            {{ Form::select('aerolinea_id', $aerolineas, [
                'class' => 'form-control' . ($errors->has('aerolinea_id') ? ' is-invalid' : ''),
                'placeholder' => 'Aerolinea Id',
            ]) }}

            {!! $errors->first('aerolinea_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

            {{ Form::label('salida') }}
            {{ Form::date('salida', $vuelo->salida, [
                'class' => 'form-control' . ($errors->has('salida') ? ' is-invalid' : ''),
                'placeholder' => 'Salida',
            ]) }}
            {!! $errors->first('salida', '<div class="invalid-feedback">:message</div>') !!}

            {{ Form::label('destino') }}
            {{-- <select class="form-control" name="destino_id" required>
                <option value="" disabled selected>Selecciones una opcion</option>
                <option>{{ $destinos[1] }}</option>
            </select> --}}
            <div class="form-control">
            {{ Form::select('destino_id', $destinos, [
                'class' => 'form-control' . ($errors->has('destino_id') ? ' is-invalid' : ''),
                'placeholder' => 'Destino Id',
            ]) }}
            {!! $errors->first('destino_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            {{ Form::label('avion') }}
            {{ Form::text('avion', $vuelo->avion, ['class' => 'form-control' . ($errors->has('avion') ? ' is-invalid' : ''), 'placeholder' => 'Avion']) }}
            {!! $errors->first('avion', '<div class="invalid-feedback">:message</div>') !!}

            {{ Form::label('embarque') }}
            <select class="form-control" name="embarque" required>
                <option value="" disabled selected>Selecciones una opcion</option>
                <option>E1</option>
                <option>E2</option>
                <option>E3</option>
                <option>E5</option>
            </select>
            {{-- {{ Form::select('embarque', $vuelo->embarque, ['class' => 'form-control' . ($errors->has('embarque') ? ' is-invalid' : ''), 'placeholder' => 'Embarque']) }} --}}
            {!! $errors->first('embarque', '<div class="invalid-feedback">:message</div>') !!}

            {{ Form::label('estatus') }}
            <select class="form-control" name="estatus" required>
                <option value="" disabled selected>Selecciones una opcion</option>
                <option>A tiempo</option>
                <option>Cancelado</option>
                <option>Retrasado</option>
            </select>
            {{--  {{ Form::text('estatus', $vuelo->estatus, ['class' => 'form-control' . ($errors->has('estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }} --}}
            {!! $errors->first('estatus', '<div class="invalid-feedback">:message</div>') !!}
        </div>

</div>
<div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
</div>
