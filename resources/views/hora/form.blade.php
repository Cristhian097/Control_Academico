<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('dia') }}
            {{ Form::text('dia', $hora->dia, ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {!! $errors->first('dia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_ini') }}
            {{ Form::text('hora_ini', $hora->hora_ini, ['class' => 'form-control' . ($errors->has('hora_ini') ? ' is-invalid' : ''), 'placeholder' => 'Hora Ini']) }}
            {!! $errors->first('hora_ini', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_fin') }}
            {{ Form::text('hora_fin', $hora->hora_fin, ['class' => 'form-control' . ($errors->has('hora_fin') ? ' is-invalid' : ''), 'placeholder' => 'Hora Fin']) }}
            {!! $errors->first('hora_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>