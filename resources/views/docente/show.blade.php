@extends('layouts.app')

@section('template_title')
    {{ $docente->id ?? 'Show Docente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="card">
            <div class="col-md-12">
                <div class="row">
                   
                        <div class="card-header">
                            <div class="float-right">
                                <span class="card-title"> </span>
                                <nav class="navbar navbar-expand-sm bg-secondary navbar-white">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#">
                                        <img src="../assets/img/aunar.png" alt="Avatar Logo" style="width:50px;" class="rounded-pill"> 
                                        </a>
                                        <h1 class="text-white">PERFIL</h1>
                                        <div class="dropdown">
                                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                            Opcion
                                        </button>
                                        <ul class="dropdown-menu">
                                            <form action="{{ route('docentes.destroy',$docente->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                
                                                <li> <a class="btn btn-light" href="{{ route('docentes.edit',$docente->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a></li>
                                                <li> <a class="btn btn-primary" href="{{ route('docentes.index') }}"> Regresar</a></li>
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                           
                                            </form>
                                        </ul>
                                    </div> 
                                    </div>
                                   
                                </nav> 
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 bg-white text-black p-3">
                                    <div class="card" style="width:400px">
                                        <img src="{{ asset('storage').'/'.$docente->Foto}}" alt="Card image" style="width:100%">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                            
                                                    {{ $docente->Nombre }}
                                                </h4> 
                                            </div>
                                                    
                                    </div>
                                </div>
                                <div class="col-sm-6 bg-white text-black p-3">
                                    <div class="shadow p-4 mb-4 bg-white">  
                                        <strong>id:</strong>
                                        {{ $docente->id }}
                                    </div>
                                       
                                    <div class="shadow p-4 mb-4 bg-white">  
                                        <strong>Directiva:</strong>
                                        {{ $docente->Directiva }}
                                    </div>
                                    
                                    <div class="shadow p-4 mb-4 bg-white">  
                                        <strong>Cedula:</strong>
                                        {{ $docente->Cedula }}
                                    </div>

                                    <div class="shadow p-4 mb-4 bg-white">  
                                        <strong>Email:</strong>
                                        {{ $docente->Email }}
                                    </div>

                                    <div class="shadow p-4 mb-4 bg-white">  
                                        <strong>Telefono:</strong>
                                        {{ $docente->Telefono }}
                                    </div>

                                    <div class="shadow p-4 mb-4 bg-white">  
                                        <strong>Titulo:</strong>
                                        {{ $docente->Titulo }}
                                    </div>

                                    <div class="shadow p-4 mb-4 bg-white">  
                                        <strong>Cargo:</strong>
                                        {{ $docente->Cargo }}
                                    </div>
                                    <div class="shadow p-4 mb-4 bg-white">  
                                        <strong>Fecha_De_Nacimiento:</strong>
                                        {{ $docente->Fecha_de_Nacimiento }}
                                    </div>
                                </div>
                            </div>   
                        </div>
                       
                  
                    
                   
                    
                
                    </div>
                   
                   
                </div>
        </div>
    </section>
   
@endsection
