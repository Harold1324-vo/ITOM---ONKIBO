@extends('layouts.app')

@section('template_title')
Equipo
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Equipos') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('equipos.create') }}" class="btn btn-primary btn-sm float-right"
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

                                    <th>Id Equipo</th>
                                    <th>Nombre de Equipo</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Cantidad en Existencia</th>
                                    <th>Color</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($equipos as $equipo)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $equipo->idEquipo }}</td>
                                    <td>{{ $equipo->nombreEquipo }}</td>
                                    <td>{{ $equipo->cantidad }}</td>
                                    <td>{{ $equipo->precio }}</td>
                                    <td>{{ $equipo->cantidadExistencia }}</td>
                                    <td>{{ $equipo->color }}</td>

                                    <td>
                                        <a class="btn btn-sm btn-primary "
                                            href="{{ route('equipos.show',$equipo->idEquipo)}}"><i
                                                class="fa fa-fw fa-eye"></i> Ver</a>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('equipos.edit',$equipo->idEquipo)}}"><i
                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                        <form action="{{route('equipos.destroy' , $equipo->idEquipo)}}" method="post">
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
            {!! $equipos->links() !!}
        </div>
    </div>
</div>
@endsection