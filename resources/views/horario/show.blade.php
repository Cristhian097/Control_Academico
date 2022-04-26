@extends('layouts.app')

@section('template_title')
    {{ $horario->name ?? 'Show Horario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Horario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Jornada:</strong>
                            {{ $horario->jornada }}
                        </div>
                        <div class="form-group">
                            <strong>Id Hora:</strong>
                            {{ $horario->id_hora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
