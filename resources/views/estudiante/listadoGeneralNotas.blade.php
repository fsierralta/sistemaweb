@extends('layouts.app')
@section('content')

   <div class="row">
       
        <div class="col-sm-6 offset-sm-3"> 
                <div class="card text-center">
                                <div class="card-header">
                                    <p class="d-block bg-primary p-4 text-danger h1 ">{{'Listado General'}}</p>
                                </div> 
                    <div class="card-body">
                                <div class="card-title">
                                    <p class='text-danger h2'>{{'Notas Trabajo Practico'}}</p>
                                 </div>
         
                                    <table class="table table-striped table-inverse table-responsive table-bordered table-hover">
                                            <thead class="thead-inverse table-dark  ">
                                                <tr>
                                                    <th>Estudiante</th>
                                                    <th>Nombre</th>
                                                    <th>Cedula</th> 
                                                    <th>Sección</th>
                                                    <th> Trabajo</th>
                                                    <th>Nota</th>
                                                    <th>Mensaje</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($registros as $listadoGeneral)
                                                    <tr>
                                                        <td scope="row" >
                                                        <div class="imagen__estudiante">
                                                            <img src="{{asset($listadoGeneral->foto)}}" class="img-fluid  img-thumbnail"
                                                            with="100" height="100"
                                                            alt="Responsive image"
                                                        >
                                                        </div>   
                                                        </td>
                                                        <td id="idNombre"  class="dato" value="{{$listadoGeneral->name}}"   >{{$listadoGeneral->name}}</td>
                                                        <td id="idCedula"  class="dato" value="{{$listadoGeneral->cedula}}">{{$listadoGeneral->cedula}}</td>
                                                        <td id="idSeccion" class="dato" value="{{$listadoGeneral->seccion}}">{{$listadoGeneral->seccion}}</td>
                                                        <td id="idTarea"   class="dato" value="{{$listadoGeneral->tareanombre}}">{{$listadoGeneral->tareanombre}}</td>
                                                        <td id="idNota"    class="dato" value="{{$listadoGeneral->nota}}">{{$listadoGeneral->nota}}</td>
                                                        <th id="idBtn"     class="dato"><button type="button" class="btn btn-primary" 
                                                                onclick="mostrarDatosE()"> 
                                                    
                                                                Ver
                                                        </button>
                                                        </th>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                    </table>
                                    @include('estudiante.modal')
                                    {{ $registros->links() }}
          
                    </div>         
                    <div class="card-footer">
                            <p class="text-success">{{'Semetre 2020-I'}}</p>
                    </div>
                </div>    
        </div> 
    </div>       
   
  
@endsection
