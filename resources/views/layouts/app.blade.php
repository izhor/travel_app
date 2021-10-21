<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="/stuff.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Travy</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
  <div class="container-fluid">
    <img src="/assets/img/travy_small.png" alt="" srcset="" class="navbar-brand icon-modified" width="100">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-5">
          @auth
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="/myBook">My Book</a></li>
            <li><a class="dropdown-item" href="/myflight">My Flights</a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </li>
          </ul>
        </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/hotel">Hotels</a>
        </li>
        </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/posts">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/flight">Flight</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ url('/home') }}">Home</a>
        </li>
        
          @else
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        @endauth
      </ul>
      <span class="navbar-text">
      
            @if (Route::has('login'))
                <div class="">
                    @auth
                       
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary text-light">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary text-light">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

      
      </span>
    </div>
  </div>
</nav>
<div class="padding-top-lg">

@auth
@yield('user-content')
@else
@yield('content')
@endauth
            
</div>
</body>
</html>