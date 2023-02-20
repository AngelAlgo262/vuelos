formulario para crear vuelo
<form action="{{ url('/vuelos') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('vuelos.formCreate',['modo'=>'Crear'])
</form>
