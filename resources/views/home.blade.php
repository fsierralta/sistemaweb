@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-center">{{config('app.name')}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     <div class='text-center ' >
                           <P class="h1">
                            Bienvenido
                          </P> 
                          <P class="h1">
                            <table class="table   table-striped  table-bordered"  >
                                 <thead class="table-dark">
                                    <tr>
                                         <th>Identidad</th>   
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Sección</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                          <img src="{{asset(Auth::user()->foto)}}" class="img-fluid" alt="Responsive image" heigth="200" width="200">
                                        </td>
                                        <td scope="row">{{Auth::user()->name}}</td>
                                        <td colspan="" rowspan="" headers="">{{$seccion->nombre}}</td>
                                    </tr>
                                    
                                        
                                    
                                </tbody>
                              </table>
                              @include('estudiante.listaNotas')
                            


                          </P> 
                       
                    </div>
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
