<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Blog Prof Freddy  Sierralta' }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/face.css')}}">

</head>
<body>
<div id="app">
       <x-menu/>

    {{--
    <nav class="navbar navbar-expand-lg navbar-light ">
            @auth
               <img src="{{asset(Auth::user()->foto)}}"
                class="img-fluid" alt="Responsive image"   alt="" heigth="10"  width="50" >
            @else

                <a class="navbar-brand" href="/">Menu</a>
            @endauth


              <button class="navbar-toggler" type="button"
                                             data-toggle="collapse"
                                             data-target="#navbarText"
                                           aria-controls="navbarText"
                                           aria-expanded="false"
                                              aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarText">
                      <ul class="navbar-nav mr-auto">
                      <!--invitado     -->
                            @guest
                              <li class="nav-item active">
                                @if(Route::has('login'))
                                  <a class="nav-link" href="{{route('login')}}">{{ __('messages.Login') }} <span class="sr-only">(current)</span></a>
                               @endif
                              </li>

                              @if(Route::has('register'))
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{route('register')}}">{{__('messages.Register')}}</a>
                                  </li>

                              @endif
                              <li class="nav-item">
                                  <a  class="nav-link" href="{{url('listado')}}">{{'Listado'}}</a>
                              </li>


                            @else
                                  <li class="nav-item">
                                      <div class="dropdown" >
                                           <button class="btn dropdown-toggle " type="button" id="mregistro"
                                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                             >
                                             {{Auth::User()->name}}


                                           </button>

                                        <div class="dropdown-menu" aria-label="mregistro">
                                             <button class="dropdown-item" type="button">
                                              <a  href="{{route('shownotas')}}">Agregar Nota</a>
                                            </button>
                                             <button class="dropdown-item" type="button">Editar Nota</button>
                                             <button class="dropdown-item" type="button">Eliminar</button>
                                             <button  class="dropdown-item" type="button">
                                              <a href="{{route('home')}}"    >Mis Notas</a>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                            </button>

                                        </div>
                                      </div>

                                  </li>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                  </form>

                            @endguest

                      </ul>
                      <span class="navbar-text">
                        <p class="text-info bg-secundary">
                        Tipo Usuario:

                         @auth


                              @if (Auth::User()->tipo==="1")
                                  {{"Administrador"}}
                            @else
                                {{"Estudiante      "}}
                            @endif
                        @endauth

                      </p>
                      </span>
                </div>
      </nav>
    --}}



        <main class="py-4">
            @yield('content')
        </main>
</div>
<script type="text/javascript">
       function    mostrarDatosE()
       {
         var  vnombre="";

          $(".dato").click(function(){

                    vnombre=$(this).parents("tr").find("#idNombre").html();
                    $('#exampleModal').modal('show');
                    $('#vnombre').val(vnombre);


                });

       }



</script>


</body>
</html>
