<div>
           <div class="navbar  navbar-expand-lg navbar-light">
              <a href="/" class="navbar-brand">Blog </a>
              <button        class="navbar-toggler"
                       data-target="#menuPrincipal"
                       data-toggle="collapse"
                               tye="button"
                             aria-controls="menuPrincipal"
                             aria-expanded="false"
                             aria-label="Toggle navigation"
               >
                  <span class="navbar-toggler-icon"></span>

              </button>

              <div class="collapse navbar-collapse  bg-info" id="menuPrincipal" >
                    <ul class="navbar-nav mr-auto" >
                            <li class="nav-item dropdown">
                                <a  class="nav-link dropdown-toggle"
                                    href="#"
                                       id="menuOpciones"
                                     role="button"
                                     data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    @auth
                                        <img src="{{asset(Auth::user()->foto)}}"
                                             class="img-fluid" alt="Responsive image"   alt="" heigth="10"  width="50" >
                                              <span>{{Auth::user()->name}}</span>
                                    @else
                                        {{'Mi Registro'}}
                                    @endauth


                                </a>
                                <div class="dropdown-menu" aria-labelledby="menuOpciones">
                                   @guest
                                      @if(Route::has('login'))

                                                <a class="dropdown-item" href="{{route('login')}}">{{'Login'}} </a>
                                     @endif

                                              @if (Route::has('register'))
                                                <a class="dropdown-item" href="{{route('register')}}">{{'Registrarse'}}</a>
                                              @endif
                                     @endguest
                                        <div class="dropdown-divider"></div>
                                        <a  class="dropdown-item" href="{{url('listado')}}" >{{'Listado'}}</a>
                                        <div class="dropdown-divider"></div>

                                        @if(Auth::user())
                                           <a class="dropdown-item" href="{{route('shownotas')}}">{{'Agregar Notas'}}</a>
                                           <a class="dropdown-item" href="{{route('logout')}} "
                                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();"
                                              >{{'Logout'}}</a>
                                       @endif

                                 </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>


                            </li>

                    </ul>

              </div>


          </div>
</div>
