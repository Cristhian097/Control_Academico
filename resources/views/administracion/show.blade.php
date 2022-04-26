@extends('layouts.app')

@section('template_title')
    {{ $administracion->name ?? 'Show Administracion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Administracion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('administracions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Facultad:</strong>
                            {{ $administracion->facultad }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $administracion->name }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $administracion->correo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
