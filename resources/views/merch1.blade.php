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
<link rel="stylesheet" href="{{asset('assets/asset/style2.css')}}">
<!-- Logo Title -->
<link rel="icon" href="{{asset('asset/img/newjeans bunny head.png')}}">
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
          <a class="nav-link" href="/">Beranda</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="/about">Tentang</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="/tracklist">Tracklist</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link active" aria-current="page" href="#" >Merch</a>
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
                                <a id="navbarDropdown" class="nav-link" href="{{ route('logout') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
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
    </div>
  </div>
</nav>
<br><br><br>
<table class="table table-bordered" style="border:transparent">
        <tr>
            <th></th>
            <th>Name</th>
            <th>Details</th>
            <th width="25%"></th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td><img src="/images/{{ $product->image }}" width="350px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Buy Now</a>
     
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </body>