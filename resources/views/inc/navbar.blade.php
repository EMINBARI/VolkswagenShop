  <style>
    @media only screen and (min-width: 768px) {
     .dropdown:hover .dropdown-menu {
     display: block;
     margin-top: 0;
     }
    }
    </style>

      <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Volkswagen
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Models
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                
                                <a class="dropdown-item custommakeactive" href="/models" >
                                    All models
                                </a>
                                
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="/models">Sedan</a>
                                <a class="dropdown-item" href="/models">Outroader</a>
                                <a class="dropdown-item" href="/models">Estate</a>
                                <a class="dropdown-item" href="/models">Hatchback</a>

                               
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link custommakeactive" href="/technologies">Technologies</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link custommakeactive" href="/about">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link custommakeactive" href="/services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custommakeactive" href="/posts">Blog</a>
                        </li>

                    </ul>
                </div>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                    <a href="/dashboard" class="btn btn-light">Dashboard</a>
                                </div>
                            </li>
                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

