<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Bolt - Web Streaming</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="assets/icon.png" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="mySidebar" class="sidebar mt-4">
      <a href="#"></a>
      <a href="{{ route('film.index') }}">Home</a>
      <a href="{{ route('genre.index') }}">Genres</a>
      <a href="{{ route('kategori.index') }}">Categories</a>
      <a href="/about">About</a>
      <a href="#"></a>
    </div>
    
    <div id="app">
        <nav id="NavBar" class="navbar fixed-top navbar-expand-md navbar-dark bg-white shadow-sm" style="z-index: 3;">
            <div class="container justify-content-between" id="">
                <div>
                <button class="openbtn" onclick="toggleNav()">&#9776;</button>
                <img src="{{ asset('assets/icon.png') }}" href="{{ route('film.index') }}" alt="logo" width="100">
                </div>
                <div class="d-flex input-group search-bar">
                    <a href="{{route('film.search')}}" class="btn btn-outline-secondary">Search for movie    <i class="fa-solid fa-search"></i></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span> <i class="fa-solid fa-circle-user fa-lg" style="color: #a2ea08;"></i></span>
                </button>
                 </div>

            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span style="color: #a2ea08; font-weight: bold;">{{ Auth::user()->name }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    @if(Auth::user() && Auth::user()->is_admin)
                                    <a class="dropdown-item" href="{{ route('kategori.index')}}">
                                       
                                        {{ __('Create Categories') }}
                                    </a>
                                    @endif

                                    @if(Auth::user() && Auth::user()->is_admin)
                                    <a class="dropdown-item" href="{{ route('genre.index')}}">
                                        {{ __('Create Genre') }}
                                    </a>
                                    @endif

                                    @if(Auth::user() && Auth::user()->is_admin)
                                    <a class="dropdown-item" href="{{ route('film.adminidx')}}">
                                        {{ __('Create Film') }}
                                    </a>
                                    @endif

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            
            @yield('content')
        </main>
    </div>
    

    <style>
        .navbar {
            background-color: #181b39 !important;
        }

        #nav-div {
            align-items: center;
        }

        .search-bar {
            width: 200px; /* adjust this value as needed */
    
        }
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgba(17, 17, 17, 0.5); /* semi-transparent black */
            overflow-x: hidden;
            backdrop-filter: blur(10px); /* blur effect */
        }

        .sidebar a {
          margin-top: 30px ;
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
          transition: 0.3s;
        }

        .sidebar a:hover {
          color: #f1f1f1;
        }

        .sidebar .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }

        #search-button {
            cursor: pointer;
        }
        .openbtn {
          font-size: 20px;
          cursor: pointer;
          background-color: #111;
          color: white;
          padding: 10px 15px;
          border: none;
        }

        .openbtn:hover {
          background-color: #444;
        }

        #app {
          transition: margin-left .5s;
          padding: 16px;
        }

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
<script>
var isNavOpen = false;

function toggleNav() {
    if (isNavOpen) {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("app").style.marginLeft= "0";
        isNavOpen = false;
    } else {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("app").style.marginLeft = "250px";
        isNavOpen = true;
    }
}

//create search function with ajax
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @yield('script')
</body>
</html>
