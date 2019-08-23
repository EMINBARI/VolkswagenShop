<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

  
    
   
    
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/datetimepicker.css')}}" rel="stylesheet" type="text/css"/>
    
    
</head>
<body>
    <div id="app">
    
        <main class="">
            @include('inc.navbar')

            <div class="container-fluid">
                @include('inc.messages')
                @yield('content')
            </div>
          
        </main>
      
    </div>
<!--
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
-->

    <div class="footer bg-dark footer-dark ">
    <footer>
        <div class="container justify-content-center align-items-center">
            <div class="row justify-content-center align-items-center">
               
                <div class="col-sm-6 col-md-3 item">
                    
                    <ul>
                        <h3>About</h3>
                        <li><a href="/about" class="btn btn-dark">Company</a></li>
                        <li><a href="/about" class="btn btn-dark">Team</a></li>
                       
                    </ul>
                </div>
            
                <div class="col-md-6 item text">
                    <h3>Volkswagen</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">Volkswagen © 2017</p>
        </div>
    </footer>
</div>
</body>
</html>
