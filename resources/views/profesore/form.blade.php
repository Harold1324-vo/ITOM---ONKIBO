<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id Profesor') }}
            {{ Form::number('idProfesor', $profesore->idProfesor, ['class' => 'form-control' . ($errors->has('idProfesor') ? ' is-invalid' : ''), 'placeholder' => 'Idprofesor']) }}
            {!! $errors->first('idProfesor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombres', $profesore->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido Paterno') }}
            {{ Form::text('apellidoPaterno', $profesore->apellidoPaterno, ['class' => 'form-control' . ($errors->has('apellidoPaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidopaterno']) }}
            {!! $errors->first('apellidoPaterno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido Materno') }}
            {{ Form::text('apellidoMaterno', $profesore->apellidoMaterno, ['class' => 'form-control' . ($errors->has('apellidoMaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidomaterno']) }}
            {!! $errors->first('apellidoMaterno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            <label for="idArteMarcial">Arte Marcial</label>
             <select name="idArteMarcial" class="form-control">
                 @foreach($artes as $arte)
                 <option value="{{$arte->idArteMarcial}}"
                 @isset($profesore)
                 {{($profesore->idArteMarcial == $arte->idArteMarcial)?'select': ''}}
                 @endisset>
                 {{$arte->tipoDiciplina}}
                </option>
                 @endforeach
             </select>   
        </div>
        <div class="form-group">
            <label for="idAlumno">Alumno</label>
             <select name="idAlumno" class="form-control">
                 @foreach($alumnos as $alumno)
                 <option value="{{$alumno->idAlumno}}"
                 @isset($profesore)
                 {{($profesore->idAlumno == $alumno->idAlumno)?'select': ''}}
                 @endisset>
                 {{$alumno->nombre}}
                </option>
                 @endforeach
             </select>   
        </div>
        <div class="form-group">
            <label for="idSeminario">Seminario</label>
             <select name="idSeminario" class="form-control">
                 @foreach($seminarios as $seminario)
                 <option value="{{$seminario->idSeminario}}"
                 @isset($profesore)
                 {{($profesore->idSeminario == $seminario->idSeminario)?'select': ''}}
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
                 @isset($profesore)
                 {{($profesore->idExamen == $examen->idExamen)?'select': ''}}
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
                 @isset($profesore)
                 {{($profesore->idServicio == $servicio->idServicio)?'select': ''}}
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
                 @isset($profesore)
                 {{($profesore->idPago == $pago->idPago)?'select': ''}}
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
                 @isset($profesore)
                 {{($profesore->idEscuela == $escuela->idEscuela)?'select': ''}}
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