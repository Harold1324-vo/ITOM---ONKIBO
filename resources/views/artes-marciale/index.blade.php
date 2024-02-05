@extends('layouts.app')

@section('template_title')
Artes Marciale
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Artes Marciales') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('artesMarciales.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('+ Nuevo') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Arte Marcial</th>
                                    <th>Tipo De Diciplina</th>
                                    <th>Fecha De Inscripcion</th>
                                    <th>Fecha De Desercion</th>
                                    <th>Fecha De Reincorporacion</th>
                                    <th>Equipo</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($artesMarciales as $artesMarciale)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $artesMarciale->idArteMarcial }}</td>
                                    <td>{{ $artesMarciale->tipoDiciplina }}</td>
                                    <td>{{ $artesMarciale->fechaInscripcion }}</td>
                                    <td>{{ $artesMarciale->fechaDesercion }}</td>
                                    <td>{{ $artesMarciale->fechaReincorporacion }}</td>
                                    <td>{{(isset($artesMarciale->equipo))?$artesMarciale->equipo->nombreEquipo:'No hay equipo asignado'}}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary "
                                            href="{{ route('artesMarciales.show',$artesMarciale->idArteMarcial)}}"><i
                                                class="fa fa-fw fa-eye"></i> Ver</a>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('artesMarciales.edit',$artesMarciale->idArteMarcial)}}"><i
                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                        <form
                                            action="{{route('artesMarciales.destroy' , $artesMarciale->idArteMarcial)}}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger" type="submit" value="Eliminar">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $artesMarciales->links() !!}
        </div>
    </div>
</div>
@endsection