@extends('layouts.app')

@section('template_title')
    {{ $direccione->name ?? 'Show Direccione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Direccion registrada</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('direcciones.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Direccion:</strong>
                            {{ $direccione->idDireccion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $direccione->nombreEstado }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $direccione->municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Colonia:</strong>
                            {{ $direccione->colonia }}
                        </div>
                        <div class="form-group">
                            <strong>Calle:</strong>
                            {{ $direccione->calle }}
                        </div>
                        <div class="form-group">
                            <strong>CP:</strong>
                            {{ $direccione->cp }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Exterior:</strong>
                            {{ $direccione->numeroExterior }}
                        </div>
                        <div class="form-group">
                            <strong>Id Seminario:</strong>
                            {{(isset($direccione->seminario))?$direccione->seminario->fechaSeminario:'No hay seminarios asignado'}}
                        </div>
                        <div class="form-group">
                            <strong>Id Torneo:</strong>
                            {{(isset($direccione->torneo))?$direccione->torneo->fechaTorneo:'No hay torneos asignado'}}
                        </div>
                        <div class="form-group">
                            <strong>Id Escuela:</strong>
                            {{(isset($direccione->escuela))?$direccione->escuela->nombreEscuela:'No hay escuelas asignado'}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
