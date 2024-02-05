@extends('layouts.app')

@section('template_title')
    {{ $alumno->name ?? 'Show Alumno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Alumnos registrados</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Alumno:</strong>
                            {{ $alumno->idAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $alumno->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paterno:</strong>
                            {{ $alumno->apellidopaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Materno:</strong>
                            {{ $alumno->apellidomaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{(isset($alumno->direccione))?$alumno->direccione->cp:'No hay direcciones asignado'}}
                        </div>
                        <div class="form-group">
                            <strong>Arte Marcial:</strong>
                            {{(isset($alumno->artesmarciale))?$alumno->artesmarciale->tipoDiciplina:'No hay arte marcial asignado'}}
                        </div>
                        <div class="form-group">
                            <strong>Torneo:</strong>
                            {{(isset($alumno->torneo))?$alumno->torneo->fechaTorneo:'No hay torneos asignado'}}
                        </div>
                        <div class="form-group">
                            <strong>Seminario:</strong>
                            {{(isset($alumno->seminario))?$alumno->seminario->fechaSeminario:'No hay seminarios asignado'}}
                        </div>
                        <div class="form-group">
                            <strong>Exámen:</strong>
                            {{(isset($alumno->examene))?$alumno->examene->nombreSinodal:'No hay examenes asignado'}}
                        </div>
                        <div class="form-group">
                            <strong>Servicios:</strong>
                            {{(isset($alumno->servicio))?$alumno->servicio->fecha:'No hay servicios asignado'}}
                        </div>
                        <div class="form-group">
                            <strong>Pagos:</strong>
                            ${{(isset($alumno->pago))?$alumno->pago->montoDado:'No hay pagos asignado'}}
                        </div>
                        <div class="form-group">
                            <strong>Escuela:</strong>
                            {{(isset($alumno->escuela))?$alumno->escuela->nombreEscuela:'No hay escuelas asignado'}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
