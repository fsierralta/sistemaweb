<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('APP_NAME','BLOG PROFESOR FREDDY SIERRALTA')}}</title>
    <script src="{{asset('js/app.js') }}"type="text/javascript" charset="utf-8" async defer></script> 
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
        <div class='container'>
             <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">Blog</a>
                        <button class="navbar-toggler" 
                                 type="button" 
                                 data-toggle="collapse" 
                                 data-target="#navbarNav" 
                                 aria-controls="navbarNav" 
                                 aria-expanded="false" 
                                 aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                      <li class="nav-item active">
                                            <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
                                      </li>
                                      <li class="nav-item">
                                            <a class="nav-link" href="#">Register</a>
                                      </li>
                                </ul>
                        </div>
            </nav>
        </div>
    </header>
    <footer>
        
    </footer>
</body>
</html>