@extends('layouts.app')

@section('template_title')
    Update Docente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card-header">
                            <div class="float-right">
                                <span class="card-title">  </span>
                                <nav class="navbar navbar-expand-sm bg-secondary navbar-white">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#">
                                        <img src="{{ asset('storage').'/'.$docente->Foto}}" alt="Avatar Logo" style="width:80px;" class="rounded-pill"> 
                                        </a>
                                        <h1 class="text-white">EDITAR</h1>
                                        <div class="dropdown">
                                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                            Opcion
                                        </button>
                                        <ul class="dropdown-menu">
                                        <form action="{{ route('docentes.destroy',$docente->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                
                                                
                                                <li> <a class="btn btn-primary" href="{{ route('docentes.index') }}"> Regresar</a></li>
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                           
                                            </form>
                                        </ul>
                                    </div> 
                                    </div>
                                   
                                </nav> 
                            </div>
                            
                        </div>
                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Docente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('docentes.update', $docente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                             <html>
                                <meta charset="utf-8">
                                

                                    <div class="card-body">
                                        <p class="card-text"> 
                                        <h1>Editar de Datos</h1>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="box box-info padding-1">
                                            
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
                                                            

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="box box-info padding-1">
                                                        <div class="box-body">
                                                        
                                                            
                                                            <div class="form-group">
                                                            <img src="{{ asset('storage').'/'.$docente->Foto}}" alt="">
                                                                {{ Form::file('Foto', ['class' => 'form-control' . ($errors->has('Foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
                                                                {!! $errors->first('Foto', '<div class="invalid-feedback">:message</div>') !!}
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                           
                                            <div class="box-footer mt20">
                                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                            </div>
                                    </div>
                                    
                                    </div>
                                </div>
                            </html>
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
