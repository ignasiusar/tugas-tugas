<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/Lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/Lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/Lte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('assets/asset/img/bunnies.jpeg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">@if(Auth::user()->image)
                                 <img class="image rounded-circle" src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="profile_image" 
                                 style="width: 70px;height: 70px; padding: 5px; margin: 2px; ">
                                @endif 
                                {{Auth::user()->name}} </a>
                    
      </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <li class="nav-item">
            <a href="{{ route('products.index')}}" class="nav-link">
            <i class="fas fa-edit"></i>
              <p>
                Update
              </p>
            </a>

            <li class="nav-item">
              
            <a href="{{ route('logout') }}" class="nav-link"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <p>
                  Logout
                </p>
              </a>

            </li>
           
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            </form>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h2>Add New Products</h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          @extends('products.layout')
     @section('content')
         <div class="row">
             <div class="col-lg-12 margin-tb">
                 <div class="pull-left">
                 </div>
                 <div class="pull-right">
                     <a class="btn btn-success" href="{{ route('products.create') }}"> Add New</a>
                 </div>
                 <br>
             </div>
         </div>
         
         @if ($message = Session::get('success'))
             <div class="alert alert-success">
                 <p>{{ $message }}</p>
             </div>
         @endif
          
         <table class="table table-bordered">
             <tr>
                 <th>No</th>
                 <th>Image</th>
                 <th>Name</th>
                 <th>Details</th>
                 <th width="280px">Action</th>
             </tr>
             @foreach ($products as $product)
             <tr>
                 <td>{{ ++$i }}</td>
                 <td><img src="/images/{{ $product->image }}" width="50px"></td>
                 <td>{{ $product->name }}</td>
                 <td>{{ $product->detail }}</td>
                 <td>
                     <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                     
                         <a class="btn btn-info" href="{{ route('products.show',$product->id) }}"><i class="fa fa-eye" aria-hidden="true"></i> </a>
           
                         <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"><i class="fas fa-edit"></i> </a>
          
                         @csrf
                         @method('DELETE')
             
                         <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                     </form>
                 </td>
             </tr>
             @endforeach
         </table>
         
         {!! $products->links() !!}
       </section>      
     @endsection
    
    <!-- /.content -->
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/Lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/Lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/Lte/dist/js/adminlte.min.js')}}"></script>
<!-- Sweet Alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(function(){
        $(document).on('click','#submit', function(e){
            e.preventDefault();
            var link = $(this).attr("href");

 Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})
        })
    })
    </script>
</body>
</html>