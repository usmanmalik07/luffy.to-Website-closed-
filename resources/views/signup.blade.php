<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('front-assets/assets/style/loginstyle.css')}}">
      <!-- Vendor CSS Files -->
  <link href="{{asset('front-assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
 <link rel="stylesheet" href="{{asset('front-assets/assets/style/style.css')}}">
</head>
<body>
<script src="{{asset('front-assets/script/script.js')}}"></script>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo"><img src="{{asset('front-assets/assets/img/logo.png')}}" alt="" class="img-fluid"></a>
          <h1 class="logo"><a href="index.html">GuffyLuffy</a></h1>

          <nav id="navbar" class="navbar">

        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('front.home') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('shop') }}">⚡Shop⚡</a></li>
          <li class="dropdown"><a href="#"><span>Watch</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('front.home') }}#trending">Categories</a></li>
              <li><a href="{{ route('front.home') }}#trending">Trending</a></li>
                  <li><a href="{{ route('front.home') }}#most-viewed">Most Viewed</a></li>
                  <li><a href="{{ route('front.home') }}#watch-more">Watch More</a></li>

            </ul>
          </li>

          <li><a class="nav-link scrollto" href="{{ route('front.home') }}#contact-us">Contact-us</a></li>
          <li><a class="nav-link scrollto " href="{{ route('front.aboutus') }}">About us</a></li>
          <li><a class="nav-link scrollto " href="{{ route('login') }}">Admin</a></li>
          <li><a class="nav-link scrollto " href="{{ route('signup') }}">User</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="/signup" method="POST" enctype="multipart/form-data" class="register-form" id="register-form" >
                        @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <!-- <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div> -->

                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('front-assets/assets/img/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
        <!-- <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('front-assets/assets/img/signin-image.jpg')}}" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section> -->

    </div>


    <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script> -->
</body>
</html>
