@extends('layouts.app')

@section('template_title')
    {{ $equipo->name ?? 'Show Equipo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Equipo registrado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('equipos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Equipo:</strong>
                            {{ $equipo->idEquipo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre del Equipo:</strong>
                            {{ $equipo->nombreEquipo }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $equipo->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $equipo->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad en Existencia:</strong>
                            {{ $equipo->cantidadExistencia }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $equipo->color }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
