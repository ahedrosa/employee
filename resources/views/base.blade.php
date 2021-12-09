<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>EmploYee - HRM Agency</title>

  <link rel="stylesheet" href="{{url ('assets/css/maicons.css')}}">

  <link rel="stylesheet" href="{{url ('assets/css/bootstrap.css')}}">
  
  <link rel="stylesheet" href="{{url ('assets/css/bootstrap.min.css')}}">
  
  <link rel="stylesheet" href="{{url ('assets/css/bootstrap-reboot.css')}}">
  
  <link rel="stylesheet" href="{{url ('assets/css/bootstrap-reboot.min.css')}}">
  
  <link rel="stylesheet" href="{{url ('assets/css/bootstrap-grid.css')}}">
  
  <link rel="stylesheet" href="{{url ('assets/css/bootstrap-grid.min.css')}}">
  
  <link rel="stylesheet" href="{{url ('assets/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{url ('assets/css/theme.css')}}">
  
  <link rel="stylesheet" href="{{url ('assets/css/style.css')}}" type="text/css" />
  @yield('css')
  <!--SeoGram-->
</head>
<body>


  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="{{ route ('index')}}" class="navbar-brand">Emplo<span class="text-primary">Yee.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route ('index')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about" data-role="smoothscroll">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url ('department')}}">Departments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url ('workstation')}}">Workstations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url ('employee')}}">Employees</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-2" href="#">Free Analytics</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
@section('content')
    <div class="container">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">Let's See Our Departaments Together!</h1>
            <p class="text-lg text-grey mb-5">Discover this enterprise from inside </p>
            <p class="text-lg text-grey mb-5">You can see more information about how to manage all our Human Resources <span class="text-primary">down below  </span> </p>
            <a href="#" class="btn btn-primary btn-split">Watch Video <div class="fab"><span class="mai-play"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="{{url ('assets/img/banner_image_1.svg')}}" alt="">
            </div>
          </div>
        </div>
        <a href="#links" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
  </header>

  <div class="page-section" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <span class="subhead">About us</span>
          <h2 class="title-section">The number #1 SEO Service Company</h2>
          <div class="divider"></div>

          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
          <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
          <a href="about.html" class="btn btn-primary mt-3">Read More</a>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <div class="img-fluid py-3 text-center">
            <img src="../assets/img/about_frame.png" alt="">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
  @show
   <div class="page-section mb-4" id="links">
    <div class="container">
   @yield('newSection')
    </div> <!-- .container -->
  </div> <!-- .page-section -->

   @include('footer')
  
  @yield('js')
    <script src="{{url ('assets/js/jquery-3.5.1.min.js')}}"></script>
    
    <script src="{{url ('assets/js/bootstrap.bundle.min.js')}}"></script>
    
    <script src="{{url ('assets/js/bootstrap.bundle.js')}}"></script>
    
    <script src="{{url ('assets/js/bootstrap.js')}}"></script>
    
    <script src="{{url ('assets/js/google-maps.js')}}"></script>
    
    <script src="{{url ('assets/vendor/wow/wow.min.js')}}"></script>
    
    <script src="{{url ('assets/js/theme.js')}}"></script>
    
    <script src="{{ url('assets/js/delete.js') }}" type="text/javascript" defer></script>
</body>
</html>