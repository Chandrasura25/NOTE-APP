<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Note App', 'Note') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="{{asset('js/bootstrapp.js') }}"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-transparent bg-transparent shadow-sm">
            <div class="container">
                <a class="navbar-brand text-light fw-bold" href="{{ url('/') }}">
                    {{ config('Note', 'Note') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
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
                        <li>
                            <a href="/note/create" class="addNote" style="--clr:#ff22eb;--i:2"><span>Add Note</span></a>
                        </li>
                            <li>
                                <div class="navigate">
                                    <div class="userBx">
                                        <div class="imgBx">
                                            <img src="{{asset("images/".Auth::user()->image_name)}}" alt="">
                                        </div>
                                        <p class="username">{{ Auth::user()->name }}</p>
                                    </div>
                                    <div class="menuToggle"></div>
                                    <ul class="menu">
                                        <li><a href="/home"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="fa fa-comment" aria-hidden="true"></i>Add Category</a></li>
                                        <li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i> Notification</a></li>
                                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-upload" aria-hidden="true"></i> Upload Profile</a></li>
                                        <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); 
                                            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>  {{ __('Logout') }}</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                             @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <script>
                                    let menuToggle = document.querySelector('.menuToggle')
                                    let navigation = document.querySelector('.navigate')
                                    menuToggle.onclick = function(){
                                        navigation.classList.toggle('active')
                                    }
                                </script>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="/upload" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Your Profile Picture</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="file" class="form-control" name="img" id="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Upload Pics</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  
  <!-- Modal for category -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
       <form action="/category" method="post">
        @csrf
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel1">Add To Your Note Category</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control" name="cat_name" placeholder="Category Name">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add To Category</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  
    </div>
</body>
</html>
