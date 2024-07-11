<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('aerolinea') }}
            <select class="form-control" name="aerolinea_id" required>
                <option disabled selected>Seleccione una opcion</option>
                @foreach ($aerolineas as $keyaerolinea => $aerolinea )
                <option value="{{ $keyaerolinea }}" {{ isset($vuelo->aerolinea_id)&&$vuelo->aerolinea_id==$keyaerolinea ? 'selected':''}}>{{ $aerolinea }}</option>
                @endforeach
                
            </select>
        </div>

            {{ Form::label('salida') }}
            {{ Form::date('salida', $vuelo->salida, [
                'class' => 'form-control' . ($errors->has('salida') ? ' is-invalid' : ''),
                'placeholder' => 'Salida',
            ]) }}
            {!! $errors->first('salida', '<div class="invalid-feedback">:message</div>') !!}

            {{ Form::label('destino') }}
            <select class="form-control" name="destino_id" required>
                <option value="" disabled selected>Selecciones una opcion</option>
                @foreach ($destinos as $keydestino => $destino )
                <option value="{{ $keydestino }}" {{ isset($vuelo->aerolinea_id)&&$vuelo->aerolinea_id==$keydestino ? 'selected':''}}>  {{ $destino }}
                </option>
                @endforeach
            </select> 
 
        </div>
            {{ Form::label('avion') }}
            {{ Form::text('avion', $vuelo->avion, ['class' => 'form-control' . ($errors->has('avion') ? ' is-invalid' : ''), 'placeholder' => 'Avion']) }}
            {!! $errors->first('avion', '<div class="invalid-feedback">:message</div>') !!}

            {{ Form::label('embarque') }}
            <div class="form-control">
            <select name="embarque" >
                <option></option>
                <option value="E1" {{ isset($vuelo->embarque)&&$vuelo->embarque=='E1'? 'selected':''}}>E1</option>
                <option value="E2" {{ isset($vuelo->embarque)&&$vuelo->embarque=='E2'? 'selected':''}}>E2</option>
                <option value="E3" {{ isset($vuelo->embarque)&&$vuelo->embarque=='E3'? 'selected':''}}>E3</option>
                <option value="E5" {{ isset($vuelo->embarque)&&$vuelo->embarque=='E5'? 'selected':''}}>E5</option>
            </select>
        </div>
            {{-- {{ Form::select('embarque', $vuelo->embarque, ['class' => 'form-control' . ($errors->has('embarque') ? ' is-invalid' : ''), 'placeholder' => 'Embarque']) }} --}}
            {!! $errors->first('embarque', '<div class="invalid-feedback">:message</div>') !!}

            {{ Form::label('estatus') }}
            <div class="form-control">
                <select name="estatus">
                    <option></option>
                    <option value="A tiempo" {{ isset($vuelo->estatus)&&$vuelo->estatus=='A tiempo'? 'selected':''}}>A tiempo</option>
                    <option value="Cancelado" {{ isset($vuelo->estatus)&&$vuelo->estatus=='Cancelado'? 'selected':''}}>Cancelado</option>
                    <option value="Retrasado" {{ isset($vuelo->estatus)&&$vuelo->estatus=='Retrasado'? 'selected':''}}>Retrasado</option>
                </select>
            </div>
            {{--  {{ Form::text('estatus', $vuelo->estatus, ['class' => 'form-control' . ($errors->has('estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }} --}}
            {!! $errors->first('estatus', '<div class="invalid-feedback">:message</div>') !!}
        </div>

</div>
<div class="box-footer">
    <button type="submit" class="btn btn-sm btn-primary" style="margin-left: 16px;">Guardar</button>
</div>
</div>
