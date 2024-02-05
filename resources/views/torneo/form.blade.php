<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id Torneo') }}
            {{ Form::number('idTorneo', $torneo->idTorneo, ['class' => 'form-control' . ($errors->has('idTorneo') ? ' is-invalid' : ''), 'placeholder' => 'Idtorneo']) }}
            {!! $errors->first('idTorneo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha del Torneo') }}
            {{ Form::date('fechaTorneo', $torneo->fechaTorneo, ['class' => 'form-control' . ($errors->has('fechaTorneo') ? ' is-invalid' : ''), 'placeholder' => 'Fechatorneo']) }}
            {!! $errors->first('fechaTorneo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio del Torneo') }}
            {{ Form::number('precioTorneo', $torneo->precioTorneo, ['class' => 'form-control' . ($errors->has('precioTorneo') ? ' is-invalid' : ''), 'placeholder' => 'Preciotorneo']) }}
            {!! $errors->first('precioTorneo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero de Peleas') }}
            {{ Form::number('numeroPeleas', $torneo->numeroPeleas, ['class' => 'form-control' . ($errors->has('numeroPeleas') ? ' is-invalid' : ''), 'placeholder' => 'Numeropeleas']) }}
            {!! $errors->first('numeroPeleas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Resultado') }}
            {{ Form::number('resultado', $torneo->resultado, ['class' => 'form-control' . ($errors->has('resultado') ? ' is-invalid' : ''), 'placeholder' => 'Resultado']) }}
            {!! $errors->first('resultado', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
</div>