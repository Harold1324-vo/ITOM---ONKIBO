@extends('layouts.app')

@section('template_title')
    {{ $seminario->name ?? 'Show Seminario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Seminario registrado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('seminarios.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>id Seminario:</strong>
                            {{ $seminario->idSeminario }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha del Seminario:</strong>
                            {{ $seminario->fechaSeminario }}
                        </div>
                        <div class="form-group">
                            <strong>Precio del Seminario:</strong>
                            {{ $seminario->precioSeminario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
