
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
      <!--invitado     -->    
       @guest   
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('login')}}">{{ __('messages.Login') }} <span class="sr-only">(current)</span></a>
                </li>
                @if(Route::has('register'))
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">{{__('messages.Register')}}</a>
                  </li>

            @endif 
       @else     
            <li class="nav-item">
                <a class="nav-link" href="#">{{Auth::User()->name}}</a>
            </li>        
            <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a> 
              </li>
              <li class="nav-item">
                <a class="dropdown-item" href="{{route('shownotas')}}">Agregar Nota</a>
              </li>
              <li class="nav-item">
                <a class="dropdown-item" href="{{route('home')}}">Home</a>
              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

       @endguest 

        
        
      </ul>
      <span class="navbar-text">
        Blog PROF. FREDDY 
      </span>
    </div>
  </nav>
 