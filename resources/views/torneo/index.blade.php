@extends('layouts.app')

@section('template_title')
    Torneo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Torneos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('torneos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>id Torneo</th>
										<th>Fecha del Torneo</th>
										<th>Precio del Torneo</th>
										<th>Numero de peleas</th>
										<th>Resultado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($torneos as $torneo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $torneo->idTorneo }}</td>
											<td>{{ $torneo->fechaTorneo }}</td>
											<td>{{ $torneo->precioTorneo }}</td>
											<td>{{ $torneo->numeroPeleas }}</td>
											<td>{{ $torneo->resultado }}</td>

                                            <td>
                                            <a class="btn btn-sm btn-primary "
                                            href="{{ route('torneos.show',$torneo->idTorneo)}}"><i
                                                class="fa fa-fw fa-eye"></i> Ver</a>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('torneos.edit',$torneo->idTorneo)}}"><i
                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                        <form action="{{route('torneos.destroy' , $torneo->idTorneo)}}"
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
                {!! $torneos->links() !!}
            </div>
        </div>
    </div>
@endsection
