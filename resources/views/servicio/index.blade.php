@extends('layouts.app')

@section('template_title')
    Servicio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Servicios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('servicios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>id Servicio</th>
										<th>Fecha</th>
										<th>Horas Realizadas</th>
										<th>Actividad Hecha</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($servicios as $servicio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $servicio->idServicio }}</td>
											<td>{{ $servicio->fecha }}</td>
											<td>{{ $servicio->horasRealizadas }}</td>
											<td>{{ $servicio->actividadHecha }}</td>

                                            <td>
                                            <a class="btn btn-sm btn-primary "
                                            href="{{ route('servicios.show',$servicio->idServicio)}}"><i
                                                class="fa fa-fw fa-eye"></i> Ver</a>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('servicios.edit',$servicio->idServicio)}}"><i
                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                        <form action="{{route('servicios.destroy' , $servicio->idServicio)}}"
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
                {!! $servicios->links() !!}
            </div>
        </div>
    </div>
@endsection
