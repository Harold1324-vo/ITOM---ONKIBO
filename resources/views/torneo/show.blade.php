@extends('layouts.app')

@section('template_title')
    {{ $torneo->name ?? 'Show Torneo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Torneo registrado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('torneos.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>id Torneo:</strong>
                            {{ $torneo->idTorneo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha del Torneo:</strong>
                            {{ $torneo->fechaTorneo }}
                        </div>
                        <div class="form-group">
                            <strong>Precio del Torneo:</strong>
                            {{ $torneo->precioTorneo }}
                        </div>
                        <div class="form-group">
                            <strong>Numero de Peleas:</strong>
                            {{ $torneo->numeroPeleas }}
                        </div>
                        <div class="form-group">
                            <strong>Resultado:</strong>
                            {{ $torneo->resultado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
