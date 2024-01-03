<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Press+Start+2P&display=swap" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="{{asset('assets/asset/style.css')}}">
<!-- Logo Title -->
<link rel="icon" href="{{asset('assets/asset/img/newjeans bunny head.png')}}">
    <title class="newjeans">NewJeans</title>
  </head>
  <body>

    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
  <div class="container">
    <a class="navbar-brand" href="#">
     <img src="{{asset('assets/asset/img/image-removebg-preview (14).png')}}" width="40" class="d-inline-block align-text-top me-3"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item mx-2">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="/about">Tentang</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="/tracklist">Tracklist</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="/merch1" >Merch</a>
        </li>
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
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->type == "admin")
                                
                                <a class="dropdown-item" href="{{ route('dashboard') }}">
                                    {{('Dashboard') }}
                                </a>
                                @endif    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
      </ul>
      <!-- <div>
        <button class="btn btn-primary" href="logout.php" >Log Out</button>
      </div> -->
    </div>
  </div>
</nav>

  <!-- Hero Section -->
<section id="hero">
  <div class="container h-100">
    <div class="row h-100">
<div class="col-md-6 hero-tagline my-auto">
  <h1><i>NewJeans</i></h1>
<!-- <p><span class="fw-bold">Yoga Solusi Intiprima </span>hadir untuk membantu mengatasi semua permasalahan pada Komputer Anda, dari Sumber Terpercaya. </p> -->
<a href="/about">
<button class="btn-secondary">About NJ</button>
</a> 
<!-- <img src="img/eva_arrow-ios-forward-fill.png"> -->
</div>
    </div>

    <img src="{{asset('assets/asset/img/Newjeans.png')}}" class="position-fixed end-0 bottom-0 img-hero" style="z-index: 1;">
  </div>
</section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
