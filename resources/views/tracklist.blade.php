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
<link rel="stylesheet" href="{{asset('assets/asset/style1.css')}}">
<!-- Logo Title -->
<link rel="icon" href="{{asset('assets/asset/img/newjeans bunny head.png')}}">
    <title class="newjeans">NewJeans</title>
  
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100" style="z-index: 2;">
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
          <a class="nav-link active" aria-current="page" href="/tracklist">Tracklist</a>
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
</head>

<body style="z-index: -2;">
  <h1 class="container1" style="z-index: 1;">Tracklist</h1>
    <div class="player" style="z-index: -1;">
    <iframe  style="border-radius:20px" width="100%" height="300" scrolling="yes" frameborder="yes" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1655708092&color=%23a9ceda&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/newjeans-music" title="NewJeans" target="_blank" style="color: #cccccc; text-decoration: none;">NewJeans</a> · <a href="https://soundcloud.com/newjeans-music/sets/newjeans-2nd-ep-get-up-1" title="NewJeans 2nd EP &#x27;Get Up&#x27;" target="_blank" style="color: #cccccc; text-decoration: none;">NewJeans 2nd EP &#x27;Get Up&#x27;</a></div>
    </div>

    <div class="player1">
    <iframe style="border-radius:20px" width="100%" height="300" scrolling="yes" frameborder="yes" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1549223212&color=%235800ff&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/newjeans-music" title="NewJeans" target="_blank" style="color: #cccccc; text-decoration: none;">NewJeans</a> · <a href="https://soundcloud.com/newjeans-music/sets/newjeans-omg-1" title="NewJeans &#x27;OMG&#x27;" target="_blank" style="color: #cccccc; text-decoration: none;">NewJeans &#x27;OMG&#x27;</a></div>    </div>
 
    <div class="player2">
    <iframe style="border-radius:20px"width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1477418758&color=%2345169e&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/newjeans-music" title="NewJeans" target="_blank" style="color: #cccccc; text-decoration: none;">NewJeans</a> · <a href="https://soundcloud.com/newjeans-music/sets/newjeans-1st-ep-new-jeans-1" title="NewJeans 1st EP &#x27;New Jeans&#x27;" target="_blank" style="color: #cccccc; text-decoration: none;">NewJeans 1st EP &#x27;New Jeans&#x27;</a></div>
   
        <div class="player3">
        <iframe  style="border-radius:20px" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1483994563&color=%23760c19&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/newjeans-music" title="NewJeans" target="_blank" style="color: #cccccc; text-decoration: none;">NewJeans</a> · <a href="https://soundcloud.com/newjeans-music/zero" title="Zero" target="_blank" style="color: #cccccc; text-decoration: none;">Zero</a></div>    </div>
  </body>
</nav>
</head>
</html>