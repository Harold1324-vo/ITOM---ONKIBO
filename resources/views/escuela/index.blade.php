@extends('layouts.app')
@section('template_title')
Escuela
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Escuelas') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('escuelas.create') }}" class="btn btn-primary btn-sm float-right"
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

                                    <th>Id Escuela</th>
                                    <th>Nombre de la Escuela</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($escuelas as $escuela)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $escuela->idEscuela }}</td>
                                    <td>{{ $escuela->nombreEscuela }}</td>

                                    <td>

                                        <a class="btn btn-sm btn-primary "
                                            href="{{ route('escuelas.show',$escuela->idEscuela)}}"><i
                                                class="fa fa-fw fa-eye"></i> Ver</a>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('escuelas.edit',$escuela->idEscuela)}}"><i
                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                        <form action="{{route('escuelas.destroy' , $escuela->idEscuela)}}"
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
            {!! $escuelas->links() !!}
        </div>
    </div>
</div>
@endsection