@extends('layouts.app')

@section('template_title')
    Actualizar Vuelo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h5>Actualizar Vuelo</h5></span>
                        <div class="float-right">
                            <a class="btn btn-sm btn-primary" href="{{ route('vuelos.index') }}">Regresar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('vuelos.update', $vuelo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('vuelo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
