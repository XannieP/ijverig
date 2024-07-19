<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="Trainingsruimte Amsterdam Vergaderruimte Amsterdam Zaalverhuur Amsterdam Workshopruimte Amsterdam Samenwerkingsruimte Amsterdam
    Trainingsruimte IJburg Vergaderruimte IJburg Zaalverhuur IJburg Workshopruimte IJburg Samenwerkingsruimte IJburg ijver Amsterdam vergaderruimtes Amsterdam ijverig Amsterdam">

    <meta name="description" content="Trainingsruimte Amsterdam Vergaderruimte Amsterdam Zaalverhuur Amsterdam Workshopruimte Amsterdam Samenwerkingsruimte Amsterdam
    Trainingsruimte IJburg Vergaderruimte IJburg Zaalverhuur IJburg Workshopruimte IJburg Samenwerkingsruimte IJburg ijver Amsterdam vergaderruimtes Amsterdam ijverig Amsterdam">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IJverig') }}</title>

    <!-- Icon --> 
    <link rel="icon" alt="IJverig" href="images/logo_ijverig_transparant.png" type="image" sizes="16x16">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script
          src="https://code.jquery.com/jquery-3.4.1.js"
          integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
          crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/36809618e0.js" crossorigin="anonymous"></script>

    @livewireStyles

    {{-- sweetalert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">


    <!-- Animation on Scroll css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- reCAPTCHA -->
    {!! htmlScriptTagJsApi() !!}
</head>
<body>
    <div id="app" style="overflow-x: hidden;">
        <nav id="navbar" class="navbar navbar-fixed-top fixed-top home-nav navbar-expand-md navbar-light" style="z-index: 1 !important;" style="overflow-x: hidden;">
            <div class="container">
                <img src="/images/logo_ijverig_transparant.png"  height="40" alt="IJverig" class="mb-2" style="margin-right: 5px;"> 
                <a class="color navbar-brand" href="{{ url('/') }}">
                    <h4 class="fw-bold"> {{ 'IJverig' }} </h4>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item"><a href="#reserveren" class="nav-link fw-bold">Reserveren</a></li>
                        <li class="nav-item"><a href="#informatie" class="nav-link fw-bold">Informatie</a></li>
                        <li class="nav-item"><a href="#impressie" class="nav-link fw-bold">Impressie</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link fw-bold">Contact</a></li>
                        @guest

                        @else

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   {{ 'User' }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->is_admin == 1)
                                        <a class="dropdown-item" href="/admin/dashboard">
                                            {{ __('Dashboard') }}
                                        </a>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>



                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest

                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>


    @yield('scripts')

    @livewireScripts

    <!-- Tilt.js -->
    <script src="{{ asset('js/tilt.jquery.js') }}"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Tilt.js -->
    
    <script src="{{ asset('js/tilt.jquery.js') }}"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
    $(function() {
      AOS.init({
        duration: 2800, // values from 0 to 3000, with step 50ms
        });
    });
    </script>

    <script type="text/javascript">

      window.addEventListener('swal:modal', event => { 
          swal({
            title: event.detail.message,
            text: event.detail.text,
            icon: event.detail.type,
          });
      });
        
    $(function () {
      $(document).scroll(function () {
        var $nav = $(".navbar-fixed-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
      });
    });


    $(function () {
      $(document).scroll(function () {
        var $nav = $(".color");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
      });
    });

    </script>

    <script type="text/javascript">
    $(document).ready(function(){
      $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
            $('#back-to-top').fadeIn();
          } else {
            $('#back-to-top').fadeOut();
          }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
          $('body,html').animate({
            scrollTop: 0
          }, 400);
          return false;
        });
    });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('body').scrollspy({
                target: '#navbar',
                offset: 10
            });
        });
    </script>


<script type="text/javascript">
    
var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};

</script>

</body>
</html>
