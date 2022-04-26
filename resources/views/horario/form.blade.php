<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('jornada') }}
            {{ Form::text('jornada', $horario->jornada, ['class' => 'form-control' . ($errors->has('jornada') ? ' is-invalid' : ''), 'placeholder' => 'Jornada']) }}
            {!! $errors->first('jornada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_hora') }}
            {{ Form::select('id_hora',$horas, $horario->id_hora, ['class' => 'form-control' . ($errors->has('id_hora') ? ' is-invalid' : ''), 'placeholder' => 'Id Hora']) }}
            {!! $errors->first('id_hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>