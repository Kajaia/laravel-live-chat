<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Live Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    @livewireStyles
</head>
<body class="d-flex flex-column min-vh-100 bg-light">
    <nav class="navbar navbar-expand bg-white shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              @guest
                @if(Route::has('login'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                @endif
                @if(Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                @endif
              @else
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Hey, {{ Auth::user()->name }}
                </a>
                <ul class="mt-3 dropdown-menu dropdown-menu-end border-0 shadow" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#!" onclick="return document.querySelector('#logout-form').submit();">Logout</a></li>
                </ul>
              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
              </form>
              @endguest
            </ul>
          </div>
        </div>
      </nav>
    <div class="container my-5">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ac59870ee9.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</body>
</html>