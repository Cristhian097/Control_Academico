<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_Facultad') }}
            {{ Form::text('Id_Facultad', $facultad->Id_Facultad, ['class' => 'form-control' . ($errors->has('Id_Facultad') ? ' is-invalid' : ''), 'placeholder' => 'Id Facultad']) }}
            {!! $errors->first('Id_Facultad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Directiva') }}
            {{ Form::text('Directiva', $facultad->Directiva, ['class' => 'form-control' . ($errors->has('Directiva') ? ' is-invalid' : ''), 'placeholder' => 'Directiva']) }}
            {!! $errors->first('Directiva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Lugar') }}
            {{ Form::text('Lugar', $facultad->Lugar, ['class' => 'form-control' . ($errors->has('Lugar') ? ' is-invalid' : ''), 'placeholder' => 'Lugar']) }}
            {!! $errors->first('Lugar', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>