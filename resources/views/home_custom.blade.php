@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary">Dashboard</div>

                <div class="card-body">
                    
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                                 
                            </div>
                        @endif
                       You are logged in! 
                        <div>
                                  <a class="btn btn-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>   
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        <img  class="img-fluid" src="{{asset(auth()->user()->foto)}}" alt=""  height="50" width="50" >
                      {{auth()->user()->name}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
