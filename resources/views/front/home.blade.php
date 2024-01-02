<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dekho Pakistan TV</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('front-assets/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('front-assets/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{asset('front-assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/assets/img/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/assets/img/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/assets/img/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
 <link rel="stylesheet" href="{{asset('front-assets/assets/style/style.css')}}">


</head>

<body>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">Dekho Pakistan TV</a></h1>
          <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('front.shop') }}">⚡Shop⚡</a></li>
          <li class="dropdown"><a href="#"><span>Watch</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Categories</a></li>
              <li><a href="#imageContainer7">Trending</a></li>
                  <li><a href="#imageContainer7">Most Viewed</a></li>
                  <li><a href="#imageContainer7">Latest</a></li>

            </ul>
          </li>

          <li><a class="nav-link scrollto" href="#contact-us">Contact-us</a></li>
          <li><a class="nav-link scrollto " href="{{ route('front.aboutus') }}">About us</a></li>
          <li><a class="nav-link scrollto " href="{{ route('dashboard') }}">Admin</a></li>
          <li><a class="nav-link scrollto " href="{{ route('signup') }}">Account</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header><!-- End Header -->

    <div class="container1" id="hero">
      <div class="bg1">
        <img src="" alt="">
        <h1>Dekho Pakistan TV <br> Bringing Anime to Pakistan</h1>
      </div>
      <div class="bg-reveal-1">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>

      </div>
    </div>
      <!-- TRENDING -->
    <h1 class="heading">TRENDING</h1>
<div id="grid">
          <div id="imageContainer1" class="col col1"></div>
          <div id="imageContainer2" class="col col2"></div>
          <div id="imageContainer3" class="col col3"></div>
          <div id="imageContainer4" class="col col4"></div>
          <div id="imageContainer5" class="col col5"></div>
          <div id="imageContainer6" class="col col6"></div>
          <div id="imageContainer7" class="col col7"></div>
</div>


<h1 class="heading">MOST VIEWED</h1>
<div id="grid">
          <div id="imageContainer1" class="col col1"></div>
          <div id="imageContainer2" class="col col2"></div>
          <div id="imageContainer3" class="col col3"></div>
          <div id="imageContainer4" class="col col4"></div>
          <div id="imageContainer5" class="col col5"></div>
          <div id="imageContainer6" class="col col6"></div>
          <div id="imageContainer7" class="col col7"></div>
</div>

<div class="container-fluid pb-video-container">
  <div class="col-md-12 col-md-offset-1">
    <h1 class="heading">WATCH MORE</h1>
      <div class="row pb-row">
          <div id="0" class="col-md-2 pb-video">
              <a href="{{asset('front-assets/pages/watchindex.html?webseries=0')}}">
                <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/aotcover.jpg')}}" alt="Thumbnail 1">
              </a>
              <a class="pb-text" href="">
                <label class="pb-text">Attack on Titan</label>
              </a>

          </div>
          <div id="1" class="col-md-2 pb-video">
              <a href="{{asset('front-assets/pages/watchindex.html?webseries=0')}}">
                <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/opcover.jpg')}}" alt="Thumbnail 2">
              </a>
              <a class="pb-text" href="pages/aot.html">
                <label class="pb-text">One Piece</label>
              </a>

          </div>
          <div class="col-md-2 pb-video">
              <a href="https://www.example.com/link3">
                <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/hxhcover.jpg')}}" alt="Thumbnail 3">
              </a>
              <a class="pb-text" href="pages/aot.html">
                <label class="pb-text">Hunter X Hunter</label>
              </a>

          </div>
          <div class="col-md-2 pb-video">
              <a href="">
                <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/haikyuucover.jpg')}}" alt="Thumbnail 4">
              </a>
              <a class="pb-text" href="">
                <label class="pb-text">Haikyuu</label>
              </a>

          </div>
          <div class="col-md-2 pb-video">
            <a href="https://www.example.com/link8">
              <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/SpiritedAwaycover.jpg')}}" alt="Thumbnail 8">
            </a>
            <a class="pb-text" href="pages/aot.html">
              <label class="pb-text">Spirited Away</label>
            </a>

        </div>
        <div class="col-md-2 pb-video">
          <a href="{{asset('front-assets/pages/watchindex.html?webseries=5')}}">
            <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/jjkcover.jpg')}}" alt="Thumbnail 8">
          </a>
          <a class="pb-text" href="pages/aot.html">
            <label class="pb-text">Jujutsu Kaisen</label>
          </a>
          </div>
      <div class="col-md-2 pb-video">
        <a href="https://www.example.com/link8">
          <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/demonslayercover.jpg')}}" alt="Thumbnail 8">
        </a>
        <a class="pb-text" href="pages/aot.html">
          <label class="pb-text">Demon Slayer</label>
        </a>

    </div>
    <div class="col-md-2 pb-video">
      <a href="https://www.example.com/link8">
        <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/hellsparadisecover.jpg')}}" alt="Thumbnail 8">
      </a>
      <a class="pb-text" href="pages/aot.html">
        <label class="pb-text">Hells Paradise</label>
      </a>
  </div>

      </div>
      <div class="row pb-row">
        <div class="col-md-2 pb-video">
            <a href="pages/aot.html">
              <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/bleachcover.jpg')}}" alt="Thumbnail 1">
            </a>
            <a class="pb-text" href="pages/aot.html">
              <label class="pb-text">Bleach</label>
            </a>

        </div>
        <div class="col-md-2 pb-video">
            <a href="https://www.example.com/link1">
              <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/tokyoghoulcover.jpg')}}" alt="Thumbnail 2">
            </a>
            <a class="pb-text" href="pages/aot.html">
              <label class="pb-text">Tokyo Ghoul</label>
            </a>

        </div>
        <div class="col-md-2 pb-video">
            <a href="https://www.example.com/link33">
              <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/narutocover.jpg')}}" alt="Thumbnail 3">
            </a>
            <a class="pb-text" href="pages/aot.html">
              <label class="pb-text">Naruto</label>
            </a>

        </div>
        <div class="col-md-2 pb-video">
            <a href="https://www.example.com/link44">
              <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/bluelockcover.jpg')}}" alt="Thumbnail 4">
            </a>
            <a class="pb-text" href="pages/aot.html">
              <label class="pb-text">Blue Lock</label>
            </a>

        </div>
        <div class="col-md-2 pb-video">
          <a href="https://www.example.com/link8">
            <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/AoAshicover.jpg')}}" alt="Thumbnail 8">
          </a>
          <a class="pb-text" href="pages/aot.html">
            <label class="pb-text">Ao Ashi</label>
          </a>

      </div>
      <div class="col-md-2 pb-video">
        <a href="https://www.example.com/link8">
          <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/vinlandsagacover.jpg')}}" alt="Thumbnail 8">
        </a>
        <a class="pb-text" href="pages/aot.html">
          <label class="pb-text">Vinland Saga</label>
        </a>
        </div>
    <div class="col-md-2 pb-video">
      <a href="https://www.example.com/link8">
        <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/monstercover.jpg')}}" alt="Thumbnail 8">
      </a>
      <a class="pb-text" href="pages/aot.html">
        <label class="pb-text">Monster</label>
      </a>

  </div>
  <div class="col-md-2 pb-video">
    <a href="https://www.example.com/link8">
      <img class="pb-video-thumbnail" src="{{asset('front-assets/assets/img/YourLieInAprilcover.jpg')}}" alt="Thumbnail 8">
    </a>
    <a class="pb-text" href="pages/aot.html">
      <label class="pb-text">Your Lie in April</label>
    </a>
</div>

    </div>
  </div>
</div>


<div class="container1" id="hero">
  <div class="bg2">
    <img src="" alt="">
  </div>
  <div class="bg-reveal-2">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>

  </div>
</div>


<!-- CONTACT US -->

      </div>
  </div>
</div>
<div id="contact-us"class="container-1">
  <div class="form-wrapper-1">
    <h2 class="form-heading-1">Let's Talk</h2>
    <form class="contact-form-1">
      <input
        type="text"
        autocomplete="off"
        placeholder="Name"
        class="contact-form-input-1"
      />
      <input
        type="email"
        autocomplete="off"
        placeholder="Email"
        class="contact-form-input-1"
      />
      <input
        type="text"
        autocomplete="off"
        placeholder="Subject"
        class="contact-form-input-1"
      />
      <textarea
        class="contact-form-inpu-1 contact-form-textarea-1"
        placeholder="Message"
      ></textarea>
      <input type="submit" class="form-submit-btn-1" value="Send Request" />
    </form>
  </div>
</div>




 <!-- FOOTER -->
      <script src="{{asset('front-assets/script/script.js')}}"></script>
      <!-- <script type="module" src="./video-list.js"></script>
        <script type="module" src="./script.js"></script>  -->
        <script src="{{asset('front-assets/script/videoscript.js')}}"></script>
        <script src="{{asset('front-assets/script/video-list.js')}}"></script>





</body>

</html>
