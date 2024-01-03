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
          <a class="nav-link" href="/index">Beranda</a>
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
      </ul>
      <!-- <div>
        <button class="btn btn-primary" href="logout.php" >Log Out</button>
      </div> -->
    </div>
  </div>
</nav>

<body>
<h1 class="container1">Merchandise</h1>
<div class="parent-container">
  @if($products !=null)
  <?php $no=2; ?>
  @foreach($products as $product)
  
<div class="container2">
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{asset('/images/'.$product->image)}}" alt="Card image cap">
    <div class="card-body">     
      <h5 class="card-title">{{$product->name}}</h5>
      <p class="card-text"><s class="discount">$56.99</s> $25.99 </p>
      <a href="#" class="btn btn-secondary">Buy Now</a>
    </div>
  </div>
  <?php $no; ?>
</div>
@endforeach
@endif

<!--  
<div class="container3">
@if($products !=null)
  @if($products->count()>0)
@foreach($products as $product)
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{asset('/images/'.$product->image)}}" alt="Card image cap">
    @endforeach
      <div class="card-body">     
        <h5 class="card-title">NewJeans TOKKI Neck Pillow</h5>
        <p class="card-text"><s class="discount">$56.99</s> $25.99 </p>
        <a href="#" class="btn btn-secondary">Buy Now</a>
      </div>
  </div>
  @endif
  @endif
</div> -->


 <!-- <div class="container3">
@foreach($products as $product)
  <div class="card" style="width: 18rem;">
  
  
    <img class="card-img-top" src="{{asset('/images/'.$product->image)}}" alt="Card image cap">
    
      <div class="card-body">     
        <h5 class="card-title">NewJeans TOKKI Neck Pillow</h5>
        <p class="card-text"><s class="discount">$56.99</s> $25.99 </p>
        <a href="#" class="btn btn-secondary">Buy Now</a>
      </div>
  </div>
  @endforeach -->
</div>
<!-- <div class="container3">
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="https://cdn-contents.weverseshop.io/public/shop/1f6792197b6bff2133d2ae368aaa7743.png?" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">NEWJEANS Official Light Stick New Jeans</h5>
        <p class="card-text"><s class="discount"></s> $50.00</p>
        <a href="#" class="btn btn-secondary disabled">Sold Out</a>
      </div>
  </div>
</div>
<div class="container4">
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="https://cdn-contents.weverseshop.io/public/shop/19dee75d8591372a80dc7fb75d3c2f75.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">NEWJEANS Official NOTE BOARD</h5>
        <p class="card-text"><s class="discount"></s> $3.71</p>
        <a href="#" class="btn btn-secondary">Buy Now</a>
      </div>
  </div>
</div>
</div> -->
</body>
