<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Arte Marcial') }}
            {{ Form::number('idArteMarcial', $artesMarciale->idArteMarcial, ['class' => 'form-control' . ($errors->has('idArteMarcial') ? ' is-invalid' : ''), 'placeholder' => 'Idartemarcial']) }}
            {!! $errors->first('idArteMarcial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo De Diciplina') }}
            {{ Form::text('tipoDiciplina', $artesMarciale->tipoDiciplina, ['class' => 'form-control' . ($errors->has('tipoDiciplina') ? ' is-invalid' : ''), 'placeholder' => 'Tipodiciplina']) }}
            {!! $errors->first('tipoDiciplina', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha De Inscripción') }}
            {{ Form::date('fechaInscripcion', $artesMarciale->fechaInscripcion, ['class' => 'form-control' . ($errors->has('fechaInscripcion') ? ' is-invalid' : ''), 'placeholder' => 'Fechainscripcion']) }}
            {!! $errors->first('fechaInscripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha De Deserción') }}
            {{ Form::date('fechaDesercion', $artesMarciale->fechaDesercion, ['class' => 'form-control' . ($errors->has('fechaDesercion') ? ' is-invalid' : ''), 'placeholder' => 'Fechadesercion']) }}
            {!! $errors->first('fechaDesercion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha De Reincorporación') }}
            {{ Form::date('fechaReincorporacion', $artesMarciale->fechaReincorporacion, ['class' => 'form-control' . ($errors->has('fechaReincorporacion') ? ' is-invalid' : ''), 'placeholder' => 'Fechareincorporacion']) }}
            {!! $errors->first('fechaReincorporacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            <label for="idEquipo">Equipo</label>
             <select name="idEquipo" class="form-control">
                 @foreach($equipos as $equipo)
                 <option value="{{$equipo->idEquipo}}"
                 @isset($artesMarciale)
                 {{($artesMarciale->idEquipo == $equipo->idEquipo)?'select': ''}}
                 @endisset>
                 {{$equipo->nombreEquipo}}
                </option>
                 @endforeach
             </select>   
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
</div>