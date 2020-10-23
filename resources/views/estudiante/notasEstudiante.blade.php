@extends('layouts.app')
@section('content')
    <div class="container">
    	<form action="{{route('createnota')}}" method="post" accept-charset="utf-8">
    		@csrf
    	<div class='row justify-content-center'>
          	 <div class="col-md-8" >
          	 	<div class="card">
          	 		   <div class="card-header text-center bg-primary">
          	 		   	      GESTIÓN DE NOTAS 
          	 		   	</div>
          	 		   	<div class='card-body'>
								 <div class="form-group- row">
								      <p class="col-md-12 text-center  bg-danger">{{$messages}}</p>
								 </div> 
          	 		   		<div class="form-group row">

          	 		   		    <label class="col-md-2    col-form-label text-md-left " for="tarea">Actividad</label>
          	 		   		    <select name="tarea"  class="col-md-10">
          	 		   		    	@foreach ($tarea as $key )
          	 		   		    	       <option value="{{$key->id}}">{{$key->nombre}}</option >	
          	 		   		    	@endforeach 
          	 		   		    	
          	 		   		    	
          	 		   		    	
          	 		   		    </select>
          	 		   		     
          	 		   		 </div>  
          	 		   		 <div class="form-group row">
          	 		   		 	    <label class="col-md-2 col-form-label text-md-left" for="notaObtenidad">Nota</label>
          	 		   		 	    <input type="text" name="notaObtenidad" id="notaObtenidad" class="col-md-10 form-control  
          	 		   		 	    @error('notaObtenidad') is-invalid @enderror"
          	 		   		 	    value="{{old('notaObtenidad')}}">
          	 		   		 	   
          	 		   		 	       
          	 		   		 	   
          	 		   		 </div>

                       <div class="form-group row">
                          @foreach($errors->all() as $message )
                          
                              <div class="alert alert-danger  col-sm mt-auto p-2">{{$message}}</div>
                          @endforeach
                       </div>
                       
          	 		   		 <div class="form-group row ">
          	 		   		 	 <button type="submit" class="btn btn-success btn-block " >Enviar</button>
          	 		   		 </div>



          	 		   		
          	 		   	</div>
          	 		   	<div class="card-footer text-center bg-ligth">
          	 		   		  TARJETA DE REGISTRO 
          	 		   		
          	 		   	</div>
          	 		
          	 	</div>

          	 	
          	 </div>
        </form>   		
         </div> 	
   </div>
@endsection