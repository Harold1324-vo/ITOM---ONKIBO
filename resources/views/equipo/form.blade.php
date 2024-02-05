<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id Equipo') }}
            {{ Form::number('idEquipo', $equipo->idEquipo, ['class' => 'form-control' . ($errors->has('idEquipo') ? ' is-invalid' : ''), 'placeholder' => 'Idequipo']) }}
            {!! $errors->first('idEquipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre de Equipo') }}
            {{ Form::text('nombreEquipo', $equipo->nombreEquipo, ['class' => 'form-control' . ($errors->has('nombreEquipo') ? ' is-invalid' : ''), 'placeholder' => 'Nombreequipo']) }}
            {!! $errors->first('nombreEquipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::number('cantidad', $equipo->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::number('precio', $equipo->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad en existencia') }}
            {{ Form::number('cantidadExistencia', $equipo->cantidadExistencia, ['class' => 'form-control' . ($errors->has('cantidadExistencia') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadexistencia']) }}
            {!! $errors->first('cantidadExistencia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Color') }}
            {{ Form::text('color', $equipo->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
</div>