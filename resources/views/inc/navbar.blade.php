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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/">{{trans('main.Home')}}</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="/models">{{trans('main.Models')}}</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="/technologies">{{trans('main.Technologies')}}</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="/about">{{trans('main.About')}}</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="/services">{{trans('main.News')}}</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                       <li class="nav-link">

                            <a href="/setlocale/en" class=" nav-link btn btn-dark">EN</a>
                            
                        </li>
                        <li class="nav-link">

                            <a href="/setlocale/ru" class="nav-link btn btn-dark">RU</a>
                            
                        </li>
                        
                      
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-link">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-link">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-link dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="width:100%; text-align:center;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                    <a href="/dashboard" style="width:100%" class="btn btn-light">Dashboard</a>
                                    @if (Auth::user()->is_admin == 1)
                                        <a href="/admin" class="btn btn-primary" style="width:100%">Admin</a>
                                    @endif
                                </div>
                            </li>
                            
                        @endguest

                        
                    </ul>
                </div>
            </div>
        </nav>

