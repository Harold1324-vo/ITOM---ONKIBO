@extends('layouts.app')

@section('template_title')
Alumno
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Alumnos') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('alumnos.create') }}" class="btn btn-primary btn-sm float-right"
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

                                    <th>Alumno</th>
                                    <th>Nombre</th>
                                    <th>Apellido Materno</th>
                                    <th>Apellido Materno</th>
                                    <th>Dirección</th>
                                    <th>Arte Marcial</th>
                                    <th>Torneo</th>
                                    <th>Seminario</th>
                                    <th>Exámen</th>
                                    <th>Servicios</th>
                                    <th>Pagos</th>
                                    <th>Escuela</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alumnos as $alumno)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $alumno->idAlumno }}</td>
                                    <td>{{ $alumno->nombre }}</td>
                                    <td>{{ $alumno->apellidopaterno }}</td>
                                    <td>{{ $alumno->apellidomaterno }}</td>
                                    <td>{{(isset($alumno->direccione))?$alumno->direccione->cp:'No hay direcciones asignado'}}</td>
                                    <td>{{(isset($alumno->artesmarciale))?$alumno->artesmarciale->tipoDiciplina:'No hay arte marcial asignado'}}</td>
                                    <td>{{(isset($alumno->torneo))?$alumno->torneo->fechaTorneo:'No hay torneos asignado'}}</td>
                                    <td>{{(isset($alumno->seminario))?$alumno->seminario->fechaSeminario:'No hay seminarios asignado'}}</td>
                                    <td>{{(isset($alumno->examene))?$alumno->examene->nombreSinodal:'No hay examenes asignado'}}</td>
                                    <td>{{(isset($alumno->servicio))?$alumno->servicio->fecha:'No hay servicios asignado'}}</td>
                                    <td>${{(isset($alumno->pago))?$alumno->pago->montoDado:'No hay pagos asignado'}}</td>
                                    <td> {{(isset($alumno->escuela))?$alumno->escuela->nombreEscuela:'No hay escuelas asignado'}} </td>

                                    <td>
                                        <a class="btn btn-sm btn-primary "
                                            href="{{ route('alumnos.show',$alumno->idAlumno)}}"><i
                                                class="fa fa-fw fa-eye"></i> Ver</a>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('alumnos.edit',$alumno->idAlumno)}}"><i
                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                        <form action="{{route('alumnos.destroy' , $alumno->idAlumno)}}" method="post">
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
            {!! $alumnos->links() !!}
        </div>
    </div>
</div>
@endsection