@extends('layouts.app')

@section('template_title')
    Profesore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Profesores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('profesores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>id Profesor</th>
										<th>Nombre</th>
										<th>Apellido paterno</th>
										<th>Apellido materno</th>
										<th>Arte Marcial</th>
										<th>Alumno</th>
										<th>Seminario</th>
										<th>Examen</th>
										<th>Servicio</th>
										<th>Pago</th>
										<th>Escuela</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($profesores as $profesore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $profesore->idProfesor }}</td>
											<td>{{ $profesore->nombres }}</td>
											<td>{{ $profesore->apellidoPaterno }}</td>
											<td>{{ $profesore->apellidoMaterno }}</td>
											<td>{{(isset($profesore->artesmarciale))?$profesore->artesmarciale->tipoDiciplina:'No hay arte marcial asignado'}}</td>
											<td>{{(isset($profesore->alumno))?$profesore->alumno->nombre:'No hay alumno asignado'}}</td>
											<td>{{(isset($profesore->seminario))?$profesore->seminario->fechaSeminario:'No hay seminarios asignado'}}</td>
											<td>{{(isset($profesore->examene))?$profesore->examene->nombreSinodal:'No hay examenes asignado'}}</td>
											<td>{{(isset($profesore->servicio))?$profesore->servicio->fecha:'No hay servicios asignado'}}</td>
											<td>${{(isset($profesore->pago))?$profesore->pago->montoDado:'No hay pagos asignado'}}</td>
											<td>{{(isset($profesore->escuela))?$profesore->escuela->nombreEscuela:'No hay escuelas asignado'}}</td>

                                            <td>
                                            <a class="btn btn-sm btn-primary "
                                            href="{{ route('profesores.show',$profesore->idProfesor)}}"><i
                                                class="fa fa-fw fa-eye"></i> Ver</a>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('profesores.edit',$profesore->idProfesor)}}"><i
                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                        <form action="{{route('profesores.destroy' , $profesore->idProfesor)}}"
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
                {!! $profesores->links() !!}
            </div>
        </div>
    </div>
@endsection
