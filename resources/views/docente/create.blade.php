@extends('layouts.app')

@section('template_title')
  
@endsection

@section('content')
     
      
    

   
        <div class="container-fluid">
            <div class="row">
               
                <div class="col-3 bg-light">
                     
                    <body>
                        <div class="navigation">
                        <div class="header">
                            <img src="../assets/img/aunar.png" alt="Avatar Logo" style="width:200px;" class="mx-auto d-block"> 
                                        
                        </div>
                            <br>
                                <ul>
                                    
                                        <li>
                                            <div class="d-grid gap-2">
                                                <a class="btn btn-outline-warning" href="{{ route('home') }}" >Menu</a>
                                            </div>
                                        </li>
                                        <br>
                                        <li>
                                            <div class="d-grid gap-2">
                                                <a class="btn btn-outline-warning" href="{{ route('docentes.index') }}" >Listado Docente</a>
                                            </div>
                                        </li>
                                    
                                </ul>
                                
                           
                               
                        
                        </div>
                        <div class="main-content">
                            <iframe sandbox="allow-same-origin allow-scripts" src=""></iframe>
                        </div>
                    </body>
                </div>
               
                
                <div class="col-9 bg-white">

                    @includeif('partials.errors')
                
                
                    <div class="container-fluid">
                    
                        <div class="row">
                            <span class="card-title">Create Docente</span>
                            
                        </div>
                        
                        <div class="col-sm">
                            <form method="POST" action="{{ route('docentes.store') }}"  role="form" enctype="multipart/form-data">
                                @csrf
                                
                                @include('docente.form')
                            
                            </form>
                            
                        </div>
                    </div>
                </div>
                

            </div>

@endsection






