@extends('layouts.app')

@section('template_title')
    {{ $destino->name ?? 'Show Destino' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Destinos</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('destinos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Cuidad Destino:</strong>
                            {{ $destino->nombre_cuidad_destino }}
                        </div>
                        <div class="form-group">
                            <strong>Pais Destino:</strong>
                            {{ $destino->pais_destino }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $destino->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $destino->estatus }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
