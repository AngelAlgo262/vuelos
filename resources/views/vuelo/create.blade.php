@extends('layouts.app')

@section('template_title')
    Crear Vuelo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h5>Crear Vuelo</h5></span>
                        <div class="float-right">
                            <a class="btn btn-sm btn-primary" href="{{ route('vuelos.index') }}"> Regresar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('vuelos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('vuelo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
