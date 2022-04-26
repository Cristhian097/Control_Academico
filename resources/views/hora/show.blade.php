@extends('layouts.app')

@section('template_title')
    {{ $hora->name ?? 'Show Hora' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Hora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Dia:</strong>
                            {{ $hora->dia }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Ini:</strong>
                            {{ $hora->hora_ini }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Fin:</strong>
                            {{ $hora->hora_fin }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
