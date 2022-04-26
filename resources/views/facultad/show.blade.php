@extends('layouts.app')

@section('template_title')
    {{ $facultad->name ?? 'Show Facultad' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Facultad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facultads.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Facultad:</strong>
                            {{ $facultad->Id_Facultad }}
                        </div>
                        <div class="form-group">
                            <strong>Directiva:</strong>
                            {{ $facultad->Directiva }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar:</strong>
                            {{ $facultad->Lugar }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
