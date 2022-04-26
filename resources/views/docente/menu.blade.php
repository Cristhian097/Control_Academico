@extends('layouts.app')

@section('template_title')
    Docente
@endsection

@section('content')

<link rel="stylesheet" href="node_modulos/">
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">   
                    <body>
                        <div class="navigation">
                            <div class="header">
                                <img src="assets/img/TALEN.jpg" class="mx-auto d-block" width="900"  alt="...">
                                <br>
                                <div class="card bg-warning text-white">
                                    <div class="card-body">
                                     <h1 class="text-center">Bienvenidos <span class="badge bg-primary"> AUNAR</span></h1>
                                    </div>
                                </div>
                                

                            </div>
                        </div> 
                    </body> 
                   
                    <div class="card">
                        <body>
                            <div class="card-header">
                                <div class="card-body">
                                <h3>Talento Humano</h3>
                                    <p>Gestionar y desarrollar el proceso de talento humano de la entidad, en cumplimiento de las normas constitucionales, implementación de programas que fortalezcan las aptitudes, valores, habilidades y destrezas de los trabajadores que generen un clima organizacional óptimo de tal forma que la Misión y Visión de la Entidad se cumpla a través de la contratación de funcionarios comprometidos y competentes. </p>
                                        
                                        <div class="shadow p-4 mb-4 bg-white" > 
                                            <img src="assets/img/aunar.png" alt="Avatar Logo" style="width:100px;" class="mx-auto d-block"> 
                                                <div class="row">
                                                    <div class="col-sm-6 bg-white text-black p-3">
                                                        <div class="container p-5 my-5 bg-light text-secondary">
                                                            <ul>
                                                            
                                                                <li class="text-center">
                                                                    
                                                                    <div class="d-grid">
                                                                        <p class="h3">Registro de docentes con sus respectivos datos personales y certificados de estudio.</p>
                                                                        <a class="btn btn-outline-warning" href="{{ route('docentes.create') }}"><i class="fa fa-fw fa-eye"></i>Registro Docentes </a>
                                                                        
                                                                        
                                                                    </div> 
                                                            
                                                                </li>

                                                            </ul>
                                                        </div> 
                                                    </div> 
                                                    <div class="col-sm-6 bg-white text-black p-3">
                                                    
                                                        <div class="container p-5 my-5 bg-light text-secondary">
                                                            <ul>
                                                            
                                                                <li class="text-center">
                                                                    
                                                                    <div class="d-grid">
                                                                        <p class="h3">Opcion para ver el registro del cuerpo docente y administrar cada uno de los datos.</p>
                                                                        
                                                                        <a class="btn btn-outline-warning" href="{{ route('docentes.index') }}"><i class="fa fa-fw fa-eye"></i>Listado Docentes </a>
                                                                    </div> 
                                                            
                                                                </li>

                                                            </ul>
                                                        </div> 
                                                    </div> 
                                                </div>
                                            </div>
                                        
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </body>

                    </div>
                   
            </div>
                </div> 
            </div>
            
    </div>
    </section>
    
    <footer class="footer text-center">
      
            <div class="container p-5 my-5 bg-white text-secondary">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Talento Humano 
                            <br />
                            Corporación Autonoma de Nariño
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Acerca del sitio</h4>
                        <p class="lead mb-0">
                            Registro del cuerpo <br />
                            docente para la<br />
                            asignacion de jornadas
                            
                        </p>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">DIRECTOR</h4>
                        <p class="lead mb-0">
                            DANIEL ESTEBAN CHAVEZ
                            <a href="https://www.aunar.edu.co/talento_humano/">talento.humano@aunar.edu.co</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
       
    </footer>
 @endsection
