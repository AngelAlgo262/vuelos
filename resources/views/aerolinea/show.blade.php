@extends('layouts.app')

@section('template_title')
    {{ $aerolinea->name ?? 'Show Aerolinea' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Aerolinea</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('aerolineas.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $aerolinea->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $aerolinea->observaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
