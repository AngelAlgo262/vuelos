@extends('layouts.app')

@section('template_title')
    Aerolineas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ ('Aerolinea') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('aerolineas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{('Nuevo') }}
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
                                        
										<th>Nombre</th>
										<th>Observaciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aerolineas as $aerolinea)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $aerolinea->nombre }}</td>
											<td>{{ $aerolinea->observaciones }}</td>

                                            <td>
                                                <form action="{{ route('aerolineas.destroy',$aerolinea->id) }}" method="POST">
                                                   
                                                    <a class="btn btn-sm btn-success" href="{{ route('aerolineas.edit',$aerolinea->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $aerolineas->links() !!}
            </div>
        </div>
    </div>
@endsection
