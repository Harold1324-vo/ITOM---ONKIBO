<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Alumno') }}
            {{ Form::number('idAlumno', $alumno->idAlumno, ['class' => 'form-control' . ($errors->has('idAlumno') ? ' is-invalid' : ''), 'placeholder' => 'Idalumno']) }}
            {!! $errors->first('idAlumno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombre', $alumno->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido Paterno') }}
            {{ Form::text('apellidopaterno', $alumno->apellidopaterno, ['class' => 'form-control' . ($errors->has('apellidopaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidopaterno']) }}
            {!! $errors->first('apellidopaterno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido Materno') }}
            {{ Form::text('apellidomaterno', $alumno->apellidomaterno, ['class' => 'form-control' . ($errors->has('apellidomaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidomaterno']) }}
            {!! $errors->first('apellidomaterno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            <label for="idDireccion">Dirección</label>
             <select name="idDireccion" class="form-control">
                 @foreach($direcciones as $direccion)
                 <option value="{{$direccion->idDireccion}}"
                 @isset($alumno)
                 {{($alumno->idDireccion == $direccion->idDireccion)?'select': ''}}
                 @endisset>
                 {{$direccion->cp}}
                </option>
                 @endforeach
             </select>   
        </div>
        <div class="form-group">
            <label for="idArteMarcial">Arte Marcial</label>
             <select name="idArteMarcial" class="form-control">
                 @foreach($artes as $arte)
                 <option value="{{$arte->idArteMarcial}}"
                 @isset($alumno)
                 {{($alumno->idArteMarcial == $arte->idArteMarcial)?'select': ''}}
                 @endisset>
                 {{$arte->tipoDiciplina}}
                </option>
                 @endforeach
             </select>   
        </div>
        <div class="form-group">
            <label for="idTorneo">Torneo</label>
             <select name="idTorneo" class="form-control">
                 @foreach($torneos as $torneo)
                 <option value="{{$torneo->idTorneo}}"
                 @isset($alumno)
                 {{($alumno->idTorneo == $torneo->idTorneo)?'select': ''}}
                 @endisset>
                 {{$torneo->fechaTorneo}}
                </option> 
                 @endforeach
             </select>   
        </div>
        <div class="form-group">
            <label for="idSeminario">Seminario</label>
             <select name="idSeminario" class="form-control">
                 @foreach($seminarios as $seminario)
                 <option value="{{$seminario->idSeminario}}"
                 @isset($alumno)
                 {{($alumno->idSeminario == $seminario->idSeminario)?'select': ''}}
                 @endisset>
                 {{$seminario->fechaSeminario}}
                </option>
                 @endforeach
             </select>   
        </div>
        <div class="form-group">
            <label for="idExamen">Exámen</label>
             <select name="idExamen" class="form-control">
                 @foreach($examenes as $examen)
                 <option value="{{$examen->idExamen}}"
                 @isset($alumno)
                 {{($alumno->idExamen == $examen->idExamen)?'select': ''}}
                 @endisset>
                 {{$examen->nombreSinodal}}
                </option>
                 @endforeach
             </select>   
        </div>
        <div class="form-group">
            <label for="idServicio">Servicios</label>
             <select name="idServicio" class="form-control">
                 @foreach($servicios as $servicio)
                 <option value="{{$servicio->idServicio}}"
                 @isset($alumno)
                 {{($alumno->idServicio == $servicio->idServicio)?'select': ''}}
                 @endisset>
                 {{$servicio->fecha}}
                </option>
                 @endforeach
             </select>   
        </div>
        <div class="form-group">
            <label for="idPago">Pagos</label>
             <select name="idPago" class="form-control">
                 @foreach($pagos as $pago)
                 <option value="{{$pago->idPago}}"
                 @isset($alumno)
                 {{($alumno->idPago == $pago->idPago)?'select': ''}}
                 @endisset>
                 {{$pago->montoDado}}
                </option>
                 @endforeach
             </select>   
        </div>
        <div class="form-group">
            <label for="idEscuela">Escuela</label>
             <select name="idEscuela" class="form-control">
                 @foreach($escuelas as $escuela)
                 <option value="{{$escuela->idEscuela}}"
                 @isset($alumno)
                 {{($alumno->idEscuela == $escuela->idEscuela)?'select': ''}}
                 @endisset>
                 {{$escuela->nombreEscuela}}
                </option>
                 @endforeach
             </select>   
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
</div>