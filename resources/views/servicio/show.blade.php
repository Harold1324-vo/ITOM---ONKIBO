@extends('layouts.app')

@section('template_title')
    {{ $servicio->name ?? 'Show Servicio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Servicio registrado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('servicios.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>id Servicio:</strong>
                            {{ $servicio->idServicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $servicio->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Horas realizadas:</strong>
                            {{ $servicio->horasRealizadas }}
                        </div>
                        <div class="form-group">
                            <strong>Actividad hecha:</strong>
                            {{ $servicio->actividadHecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
