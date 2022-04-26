<html>
<meta charset="utf-8">
  

        <div class="card-body">
        <p class="card-text"> 
      
        
        <h1 class="text-center">Registro de Docente</h1>
        <div class="box box-info padding-1">
            <div class="row">
                <div class="col">
                    <div class="card" style="width:204px">
                        <img class="rounded-circle" src="../assets/img/perff.png"  alt="Cinque Terre" width="204" height="136" >
                        <div class="card-body">
                           
                            
                        </div>
                     </div>
                     <br>
                     <div class="mb-3">
                                {{ Form::label('Foto') }}
                                {{ Form::file('Foto', $docente->Foto, ['class' => 'form-control' . ($errors->has('Foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
                                {!! $errors->first('Foto', '<div class="invalid-feedback">:message</div>') !!}
                    </div>

                    
                </div>
                <div class="col">
                <div class="box-body">
                        
                        <div class="form-group">
                            {{ Form::label('Directiva') }}
                            {{ Form::text('Directiva', $docente->Directiva, ['class' => 'form-control' . ($errors->has('Directiva') ? ' is-invalid' : ''), 'placeholder' => 'Directiva']) }}
                            {!! $errors->first('Directiva', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Nombre') }}
                            {{ Form::text('Nombre', $docente->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Cedula') }}
                            {{ Form::text('Cedula', $docente->Cedula, ['class' => 'form-control' . ($errors->has('Cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
                            {!! $errors->first('Cedula', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Email') }}
                            {{ Form::email('Email', $docente->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'name@example.com']) }}
                            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Telefono') }}
                            {{ Form::text('Telefono', $docente->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Titulo') }}
                            {{ Form::text('Titulo', $docente->Titulo, ['class' => 'form-control' . ($errors->has('Titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
                            {!! $errors->first('Titulo', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Cargo') }}
                            {{ Form::text('Cargo', $docente->Cargo, ['class' => 'form-control' . ($errors->has('Cargo') ? ' is-invalid' : ''), 'placeholder' => 'Cargo']) }}
                            {!! $errors->first('Cargo', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Fecha_de_Nacimiento') }}
                            {{ Form::date('Fecha_de_Nacimiento', $docente->Fecha_de_Nacimiento, ['class' => 'form-control' . ($errors->has('Fecha_de_Nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha_De_Nacimiento']) }}
                            {!! $errors->first('Fecha_de_Nacimiento', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <br>
                        <div class="box-footer mt20">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>

                    </div> 
                </div>
            </div>
                
     
    </div>
    
  </div>
</div>
</html>

