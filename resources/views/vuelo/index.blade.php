@extends('layouts.app')

@section('template_title')
    Vuelo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h5>Vuelos</h5>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('vuelos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ ('Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Aerolinea Id</th>
										<th>Salida</th>
										<th>Destino</th>
										<th>Avion</th>
										<th>Embarque</th>
										<th>Estatus</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vuelos as $vuelo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $vuelo->aerolinea->nombre }}</td>
											<td>{{ $vuelo->salida }}</td>
											<td>{{ $vuelo->destino->nombre_cuidad_destino }}</td>
											<td>{{ $vuelo->avion }}</td>
											<td>{{ $vuelo->embarque }}</td>
											<td>{{ $vuelo->estatus }}</td>

                                            <td>
                                                <form action="{{ route('vuelos.destroy',$vuelo->id) }}" method="POST">
                                                    
                                                    <a class="btn btn-sm btn-warning" href="{{ route('vuelos.edit',$vuelo->id) }}">
                                                        <img src="{{ asset('icons/magnifying-glass.svg') }}" alt="Editar" class="svg-icon"> Editar
                                                    </a>
                                                    <a class="btn btn-sm btn-info text-white" href="{{ route('vuelos.show', $vuelo->id) }}"> Detalle </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $vuelos->links() !!}
            </div>
        </div>
    </div>
@endsection
