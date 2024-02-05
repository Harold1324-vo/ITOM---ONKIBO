@extends('layouts.app')

@section('template_title')
Seminario
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Seminarios') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('seminarios.create') }}" class="btn btn-primary btn-sm float-right"
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

                                    <th>id Seminario</th>
                                    <th>Fecha del Seminario</th>
                                    <th>Precio del Seminario</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($seminarios as $seminario)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $seminario->idSeminario }}</td>
                                    <td>{{ $seminario->fechaSeminario }}</td>
                                    <td>{{ $seminario->precioSeminario }}</td>

                                    <td>
                                        <a class="btn btn-sm btn-primary "
                                            href="{{ route('seminarios.show',$seminario->idSeminario)}}"><i
                                                class="fa fa-fw fa-eye"></i> Ver</a>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('seminarios.edit',$seminario->idSeminario)}}"><i
                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                        <form action="{{route('seminarios.destroy' , $seminario->idSeminario)}}"
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
            {!! $seminarios->links() !!}
        </div>
    </div>
</div>
@endsection