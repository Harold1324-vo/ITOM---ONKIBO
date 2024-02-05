@extends('layouts.app')

@section('template_title')
    {{ $artesMarciale->name ?? 'Show Artes Marciale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Arte Marcial Registrada</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('artesMarciales.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Arte Marcial:</strong>
                            {{ $artesMarciale->idArteMarcial }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo De Diciplina:</strong>
                            {{ $artesMarciale->tipoDiciplina }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Inscripcion:</strong>
                            {{ $artesMarciale->fechaInscripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Deserción:</strong>
                            {{ $artesMarciale->fechaDesercion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Reincorporacion:</strong>
                            {{ $artesMarciale->fechaReincorporacion }}
                        </div>
                        <div class="form-group">
                            <strong>Equipo:</strong>
                            {{(isset($artesMarciale->equipo))?$artesMarciale->equipo->nombreEquipo:'No hay equipo asignado'}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
