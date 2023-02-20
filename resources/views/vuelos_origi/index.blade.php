{{-- @if (Session::has('mensaje'))
    {{ Session::get('mensaje') }}
@endif --}}
<h1>Ventana A (todos los vuelos)</h1>
<a href="{{ url('vuelos/create') }}">Nuevo Vuelo</a>
<a href="{{ url('aerolineas/create') }}">Aerolineas</a>
<table>
    <thead>
        <tr>
            <th>Id Vuelo</th>
            <th>Aerolinea</th>
            <th>Salida</th>
            <th>Destino</th>
            <th>Modelo Avion</th>
            <th>Puerta de embarque</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vuelos as $vuelo)
            <tr>
                <td>{{ $vuelo->id }}</td>
                <td>{{ $vuelo->aerolinea }}</td>
                <td>{{ $vuelo->salida }}</td>
                <td>{{ $vuelo->destino }}</td>
                <td>{{ $vuelo->avion }}</td>
                <td>{{ $vuelo->embarque }}</td>
                <td>{{ $vuelo->estatus }}</td>
                <td>
                    <a href="{{ url('/vuelos/' . $vuelo->id . '/edit') }}">
                        Editar
                    </a>
                    <form action="{{ url('/vuelos/' . $vuelo->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('Esta seguro?')" value="Borrar">
                    </form>

                </td>
            </tr>
        @endforeach

    </tbody>
</table>
