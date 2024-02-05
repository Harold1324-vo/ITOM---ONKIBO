<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id Servicio') }}
            {{ Form::number('idServicio', $servicio->idServicio, ['class' => 'form-control' . ($errors->has('idServicio') ? ' is-invalid' : ''), 'placeholder' => 'Idservicio']) }}
            {!! $errors->first('idServicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('fecha', $servicio->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Horas Realizadas') }}
            {{ Form::number('horasRealizadas', $servicio->horasRealizadas, ['class' => 'form-control' . ($errors->has('horasRealizadas') ? ' is-invalid' : ''), 'placeholder' => 'Horasrealizadas']) }}
            {!! $errors->first('horasRealizadas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Actividad Hecha') }}
            {{ Form::text('actividadHecha', $servicio->actividadHecha, ['class' => 'form-control' . ($errors->has('actividadHecha') ? ' is-invalid' : ''), 'placeholder' => 'Actividadhecha']) }}
            {!! $errors->first('actividadHecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
</div>