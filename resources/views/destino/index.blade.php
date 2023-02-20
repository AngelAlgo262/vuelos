@extends('layouts.app')

@section('template_title')
    Destinos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Destino') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('destinos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Nombre Cuidad Destino</th>
										<th>Pais Destino</th>
										<th>Observaciones</th>
										<th>Estatus</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($destinos as $destino)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $destino->nombre_cuidad_destino }}</td>
											<td>{{ $destino->pais_destino }}</td>
											<td>{{ $destino->observaciones }}</td>
											<td>{{ $destino->estatus }}</td>

                                            <td>
                                                <form action="{{ route('destinos.destroy',$destino->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('destinos.show',$destino->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('destinos.edit',$destino->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $destinos->links() !!}
            </div>
        </div>
    </div>
@endsection
