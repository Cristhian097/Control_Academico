@extends('layouts.app')

@section('template_title')
    Dato
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="navigation">
                                    <div class="header">
                                        <img src="./assets/img/desk.jpg" class="mx-auto d-block" width="700"  alt="..." >
                                        <h1>
                                            Bienvenidos Talento Humano
                                        </h1>
                                    </div>
                            <span id="card_title">
                                {{ __('Dato') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('datos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <form action="{{route('datos.index')}}" method="get">
                            <div class="form-row">
                                <div class="col-sm-4 my-1">
                                    <input type="text" class="form-control" name="texto" value="{{$datos}}">
                                   
                                </div> 
                                <div class="col-auto my-1">
                                    <input type="submit" class="btn btn-primary" value="buscar">
                                </div>

                               
                            </div>
                        </form>
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
                                        <th>No</th>
                                        
										<th>Facultad</th>
										<th>Name</th>
										<th>Correo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datos as $dato)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $dato->facultad }}</td>
											<td>{{ $dato->name }}</td>
											<td> 
                                                <img src="{{ asset('storage').'/'.$dato->correo}}" alt="Card image" style="width:20%">
                                            </td>
                                            
                                            <td>
                                                <form action="{{ route('datos.destroy',$dato->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('datos.show',$dato->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ url('/datos/'.$dato->id.'/edit') }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $datos->links() !!}
            </div>
        </div>
    </div>
@endsection
