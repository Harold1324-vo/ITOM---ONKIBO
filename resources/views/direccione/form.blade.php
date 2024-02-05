<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idDireccion') }}
            {{ Form::number('idDireccion', $direccione->idDireccion, ['class' => 'form-control' . ($errors->has('idDireccion') ? ' is-invalid' : ''), 'placeholder' => 'Iddireccion']) }}
            {!! $errors->first('idDireccion', '<div class="invalid-feedback">:message</p>') !!}
        </div> 
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('nombreEstado', $direccione->nombreEstado, ['class' => 'form-control' . ($errors->has('nombreEstado') ? ' is-invalid' : ''), 'placeholder' => 'Nombreestado']) }}
            {!! $errors->first('nombreEstado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Municipio') }}
            {{ Form::text('municipio', $direccione->municipio, ['class' => 'form-control' . ($errors->has('municipio') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
            {!! $errors->first('municipio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Colonia') }}
            {{ Form::text('colonia', $direccione->colonia, ['class' => 'form-control' . ($errors->has('colonia') ? ' is-invalid' : ''), 'placeholder' => 'Colonia']) }}
            {!! $errors->first('colonia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Calle') }}
            {{ Form::text('calle', $direccione->calle, ['class' => 'form-control' . ($errors->has('calle') ? ' is-invalid' : ''), 'placeholder' => 'Calle']) }}
            {!! $errors->first('calle', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CP') }}
            {{ Form::number('cp', $direccione->cp, ['class' => 'form-control' . ($errors->has('cp') ? ' is-invalid' : ''), 'placeholder' => 'Cp']) }}
            {!! $errors->first('cp', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número exterior') }}
            {{ Form::number('numeroExterior', $direccione->numeroExterior, ['class' => 'form-control' . ($errors->has('numeroExterior') ? ' is-invalid' : ''), 'placeholder' => 'Numeroexterior']) }}
            {!! $errors->first('numeroExterior', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            <label for="idSeminario">Seminario</label>
             <select name="idSeminario" class="form-control">
                 @foreach($seminarios as $seminario)
                 <option value="{{$seminario->idSeminario}}"
                 @isset($direccione)
                 {{($direccione->idSeminario == $seminario->idSeminario)?'select': ''}}
                 @endisset>
                 {{$seminario->fechaSeminario}}
                </option>
                 @endforeach
             </select>   
        </div>
        <div class="form-group">
            <label for="idTorneo">Torneo</label>
             <select name="idTorneo" class="form-control">
                 @foreach($torneos as $torneo)
                 <option value="{{$torneo->idTorneo}}"
                 @isset($direccione)
                 {{($direccione->idTorneo == $torneo->idTorneo)?'select': ''}}
                 @endisset>
                 {{$torneo->fechaTorneo}}
                </option>
                 @endforeach
             </select>   
        </div>
        <div class="form-group">
            <label for="idEscuela">Escuela</label>
             <select name="idEscuela" class="form-control">
                 @foreach($escuelas as $escuela)
                 <option value="{{$escuela->idEscuela}}"
                 @isset($direccione)
                 {{($direccione->idEscuela == $escuela->idEscuela)?'select': ''}}
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