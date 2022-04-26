@extends('layouts.app')

@section('template_title')
    {{ $dato->name ?? 'Show Dato' }}
@endsection

@section('content')

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Dato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('datos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('datos.update', $dato->id) }}"  role="form" enctype="multipart/form-data">
                             @csrf
                                {{ method_field('PATCH') }}
                              
                                <div class="form-group">
                                    {{ Form::label('facultad') }}
                                    {{ Form::text('facultad', $dato->facultad, ['class' => 'form-control' . ($errors->has('facultad') ? ' is-invalid' : ''), 'placeholder' => 'Facultad']) }}
                                    {!! $errors->first('facultad', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('name') }}
                                    {{ Form::text('name', $dato->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
                                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <div class="form-group">
                                <img src="{{ asset('storage').'/'.$dato->correo}}" alt="">
                                     {{ Form::file('correo', ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
                                    {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                        </form>

                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

