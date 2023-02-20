<h1>{{ $modo }} Vuelo</h1>
    <label for="aeroliena">Aerolinea</label>
    <input type="text" name="aerolinea" 
    value="">
<br>
    <label for="salida">Salida</label>
    <input type="date" name="salida"  
    value="">
    <br>
    <label for="destino">Destino</label>
    <input type="text" name="destino" value="">
    <br>
    <label for="avion">Modelo Avion</label>
    <input type="text" name="avion" value="">
    <br>
    <label for="embarque">Puerta de embarque</label>
    <select name="embarque" >
        <option value=""></option>
        <option>E1</option>
        <option>E2</option>
        <option>E3</option>
        <option>E5</option>
    </select>
    <br>
    <label for="estatus">Estatus</label>
    <select name="estatus">
        <option ></option>
        <option>A tiempo</option>
        <option>Cancelado</option>
        <option>Retrasado</option>
    </select>
    <br>
    <input type="submit" value="Guardar">
<a href="{{ url('vuelos') }}">Regresar</a>