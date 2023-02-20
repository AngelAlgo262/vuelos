formulario para editar vuelo

    <label for="aeroliena">Aerolinea</label>
    <input type="text" name="aerolinea" 
    value="{{ isset($vuelo->aerolinea) ? $vuelo->aerolinea : '' }}">
<br>
    <label for="salida">Salida</label>
    <input type="date" name="salida" 
    value="{{ isset($vuelo->salida)? $vuelo->salida:old($vuelo->salida) }}">
    <br>
    <label for="destino">Destino</label>
    <input type="text" name="destino" value="{{ isset($vuelo->destino)? $vuelo->destino:old($vuelo->destino) }}">
    <br>
    <label for="avion">Modelo Avion</label>
    <input type="text" name="avion" value="{{ isset($vuelo->avion)? $vuelo->avion:old($vuelo->avion) }}">
    <br>
    <label for="embarque">Puerta de embarque</label>
    <select name="embarque" >
        <option value="{{ isset($vuelo->embarque)? $vuelo->embarque:old($vuelo->embarque) }}" disabled></option>
        <option>E1</option>
        <option>E2</option>
        <option>E3</option>
        <option>E5</option>
    </select>
    <br>
    <label for="estatus">Estatus</label>
    <select name="estatus">
        <option value="{{ isset($vuelo->estatus)? $vuelo->estatus:old($vuelo->estatus) }}" disabled></option>
        <option>A tiempo</option>
        <option>Cancelado</option>
        <option>Retrasado</option>
    </select>
    <br>
    <input type="submit" value="Guardar">
<a href="{{ url('vuelos') }}">Regresar</a>