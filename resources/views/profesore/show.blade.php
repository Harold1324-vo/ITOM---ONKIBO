@extends('layouts.app')

@section('template_title')
    {{ $profesore->name ?? 'Show Profesore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Profesor registrado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('profesores.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>id Profesor:</strong>
                            {{ $profesore->idProfesor }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $profesore->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paterno:</strong>
                            {{ $profesore->apellidoPaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Materno:</strong>
                            {{ $profesore->apellidoMaterno }}
                        </div>
                        <div class="form-group">
                            <strong>id Arte Marcial:</strong>
                            {{(isset($profesore->artesmarciale))?$profesore->artesmarciale->tipoDiciplina:'No hay arte marcial asignado'}}
                        </div>
                        <div class="form-group">
                            <strong>id Alumno:</strong>
                            {{(isset($profesore->alumno))?$profesore->alumno->nombre:'No hay alumno asignado'}}
                        </div>
                        <div class="form-group">
                            <strong>id Seminario:</strong>
                            {{(isset($profesore->seminario))?$profesore->seminario->fechaSeminario:'No hay seminarios asignado'}}
                        </div>
                        <div class="form-group">
                            <strong>id Examen:</strong>
                            {{(isset($profesore->examene))?$profesore->examene->nombreSinodal:'No hay examenes asignado'}}
                        </div>
                        <div class="form-group">
                            <strong>id Servicio:</strong>
                            {{(isset($profesore->servicio))?$profesore->servicio->fecha:'No hay servicios asignado'}}
                        </div>
                        <div class="form-group">
                            <strong>id Pago:</strong>
                            ${{(isset($profesore->pago))?$profesore->pago->montoDado:'No hay pagos asignado'}}
                        </div>
                        <div class="form-group">
                            <strong>id Escuela:</strong>
                            {{(isset($profesore->escuela))?$profesore->escuela->nombreEscuela:'No hay escuelas asignado'}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
