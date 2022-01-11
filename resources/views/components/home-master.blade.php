<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home</title>

  <!-- Bootstrap core CSS
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="{{asset('css/app.css')}}">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #4e73df; background-image: linear-gradient(#4e73df, #224abe);">
    <div class="container">
      <div class="navbar-brand-icon rotate-n-13">
        <img src="{{ asset('Profile-Images/evoting-logo.png') }}" alt="logo-image">
      </div>
      <a class="navbar-brand ml-2" href="{{route('home')}}"><h2>HOME</h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}"><h4>Home</h4>
              <span class="sr-only">(current)</span>
            </a>
          </li>

          @if(Auth::check())
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.index')}}"><h4>Dashboard</h4></a>
          </li>

          @else
          <li class="nav-item">
            <a class="nav-link" href="/login"><h4>Login</h4></a>
          </li>

          @endif

          <li class="nav-item">
            <a class="nav-link" href="{{route('show.about')}}"><h4>About Us</h5></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('show.contact')}}"><h4>Contact</h5></a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col">

        @yield('content')

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5" style="background-color: #4e73df; background-image: linear-gradient(#224abe, #4e73df);">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Cyprus E-Voting 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
