@extends('layouts.app')

@section('template_title')
Create Escuela
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Crear registro</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('escuelas.store',$escuela->idEscuela)}}" role="form"
                        enctype="multipart/form-data">
                        @csrf

                        @include('escuela.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection