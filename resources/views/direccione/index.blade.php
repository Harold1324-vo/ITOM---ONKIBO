@extends('layouts.app')

@section('template_title')
    Direccione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Direcciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('direcciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Direccion</th>
										<th>Estado</th>
										<th>Municipio</th>
										<th>Colonia</th>
										<th>Calle</th>
										<th>CP</th>
										<th>Numero Exterior</th>
										<th>Seminario</th>
										<th>Torneo</th>
										<th>Escuela</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($direcciones as $direccione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $direccione->idDireccion }}</td>
											<td>{{ $direccione->nombreEstado }}</td>
											<td>{{ $direccione->municipio }}</td>
											<td>{{ $direccione->colonia }}</td>
											<td>{{ $direccione->calle }}</td>
											<td>{{ $direccione->cp }}</td>
											<td>{{ $direccione->numeroExterior }}</td>
											<td>{{(isset($direccione->seminario))?$direccione->seminario->fechaSeminario:'No hay seminarios asignado'}}</td>
											<td>{{(isset($direccione->torneo))?$direccione->torneo->fechaTorneo:'No hay torneos asignado'}}</td>
											<td>{{(isset($direccione->escuela))?$direccione->escuela->nombreEscuela:'No hay escuelas asignado'}}</td>

                                            <td>
                                            <a class="btn btn-sm btn-primary "
                                            href="{{ route('direcciones.show',$direccione->idDireccion)}}"><i
                                                class="fa fa-fw fa-eye"></i> Ver</a>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('direcciones.edit',$direccione->idDireccion)}}"><i
                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                        <form action="{{route('direcciones.destroy' , $direccione->idDireccion)}}"
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
                {!! $direcciones->links() !!}
            </div>
        </div>
    </div>
@endsection
