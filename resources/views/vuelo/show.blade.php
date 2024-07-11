@extends('layouts.app')

@section('template_title')
    {{ $vuelo->name ?? 'Show Vuelo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Vuelo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-sm btn-primary" href="{{ route('vuelos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Aerolinea Id:</strong>
                            {{ $vuelo->aerolinea_id }}
                        </div>
                        <div class="form-group">
                            <strong>Salida:</strong>
                            {{ $vuelo->salida }}
                        </div>
                        <div class="form-group">
                            <strong>Destino Id:</strong>
                            {{ $vuelo->destino_id }}
                        </div>
                        <div class="form-group">
                            <strong>Avion:</strong>
                            {{ $vuelo->avion }}
                        </div>
                        <div class="form-group">
                            <strong>Embarque:</strong>
                            {{ $vuelo->embarque }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $vuelo->estatus }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
