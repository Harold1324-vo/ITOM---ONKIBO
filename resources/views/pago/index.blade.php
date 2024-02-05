@extends('layouts.app')

@section('template_title')
    Pago
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pagos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pagos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Pago</th>
										<th>Fecha de Pago</th>
										<th>Monto dado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pagos as $pago)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pago->idPago }}</td>
											<td>{{ $pago->fechaPago }}</td>
											<td>{{ $pago->montoDado }}</td>

                                            <td>
                                            <a class="btn btn-sm btn-primary "
                                            href="{{ route('pagos.show',$pago->idPago)}}"><i
                                                class="fa fa-fw fa-eye"></i> Ver</a>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('pagos.edit',$pago->idPago)}}"><i
                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                        <form action="{{route('pagos.destroy' , $pago->idPago)}}"
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
                {!! $pagos->links() !!}
            </div>
        </div>
    </div>
@endsection
