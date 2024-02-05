@extends('layouts.app')

@section('template_title')
    Examene
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Examenes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('examenes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Examen</th>
										<th>Fecha de Examen</th>
										<th>Nombre Sinodal</th>
										<th>Grado Obtenido</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($examenes as $examene)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $examene->idExamen }}</td>
											<td>{{ $examene->fechaExamen }}</td>
											<td>{{ $examene->nombreSinodal }}</td>
											<td>{{ $examene->gradoObtenido }}</td>

                                            <td>
                                            <a class="btn btn-sm btn-primary "
                                            href="{{ route('examenes.show',$examene->idExamen)}}"><i
                                                class="fa fa-fw fa-eye"></i> Ver</a>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('examenes.edit',$examene->idExamen)}}"><i
                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                        <form action="{{route('examenes.destroy' , $examene->idExamen)}}"
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
                {!! $examenes->links() !!}
            </div>
        </div>
    </div>
@endsection
