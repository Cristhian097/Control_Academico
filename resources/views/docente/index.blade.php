@extends('layouts.app')

@section('template_title')
    Docente
@endsection

@section('content')

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">Talento Humano</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('docentes.create') }}">Registrar</a>
        </li>
      </ul>
     
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Docente">
        <button class="btn btn-warning" type="button">Buscar</button>
      </form>
     
     
    </div>
   
  </div>
</nav> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">  
                       
                            
                            <body>
                                <div class="navigation">
                                    <div class="header">
                                        <img src="./assets/img/desk.jpg" class="mx-auto d-block" width="700"  alt="...">
                                        
                                    </div>
                                    <br>
                                  
                                    
                                </div>
                               
                            </body>
                     </div>      
                </div>


                
                    <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">

                                    <span id="card_title">
                                        {{ __('Docentes') }}
                                    </span>

                                </div>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead">
                                            <tr>
                                                <th>Id</th>
                                                <th>Directiva</th>
                                                <th>Nombre</th>
                                                <th>Email</th>
                                                <th>Telefono</th>
                                                <th>Titulo</th>
                                                <th>Cargo</th>
                                               
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($docentes as $docente)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    
                                                    <td>{{ $docente->Directiva }}</td>
                                                    <td>{{ $docente->Nombre }}</td>
                                                    <td>{{ $docente->Email }}</td>
                                                    <td>{{ $docente->Telefono }}</td>
                                                    <td>{{ $docente->Titulo }}</td>
                                                    <td>{{ $docente->Cargo }}</td>
                                                   
                                                  <td>
                                                        <form action="{{ route('docentes.destroy',$docente->id) }}" method="POST">
                                                            <a class="btn btn-warning " href="{{ route('docentes.show',$docente->id) }}"><i class="fa fa-fw fa-eye"></i> Perfil</a>
                                                            
                                                            
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                        {!! $docentes->links() !!}
                
            </div> 
        </div>   
    </div>
@endsection
