<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/36809618e0.js" crossorigin="anonymous"></script>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    {{-- sweetalert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    
    <!-- Style Livewire -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    @livewireStyles

    <!-- Animation on Scroll css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>


        <div class="sidebar open">
            <div class="logo-details">
              <a href="/" class="none">
                <div class="logo_name">Admin Panel</div>
              </a>
                <i class='bx bx-menu' id="btn" ></i>
            </div>
            <ul class="nav-list">
              <li class="{{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}">
                <a href="/admin/dashboard">
                  <i class='bx bx-grid-alt'></i>
                  <span class="links_name">Dashboard</span>
                </a>
                 <span class="tooltip">Dashboard</span>
              </li>
              <li class="{{ (request()->segment(3) == 'nieuw') ? 'active' : '' }}">
               <a href="/admin/reserveringen/nieuw">
                 <i class='far fa-folder' ></i>
                 <span class="links_name">Nieuw</span>
               </a>
               <span class="tooltip">Nieuw</span>
             </li>
              <li class="{{ (request()->segment(3) == 'gereserveerd') ? 'active' : '' }}">
               <a href="/admin/reserveringen/gereserveerd">
                 <i class='fas fa-book' ></i>
                 <span class="links_name">Gereserveerd</span>
               </a>
               <span class="tooltip">Gereserveerd</span>
             </li>
              <li class="{{ (request()->segment(3) == 'archief') ? 'active' : '' }}">
               <a href="/admin/reserveringen/archief">
                 <i class='fas fa-inbox' ></i>
                 <span class="links_name">Archief</span>
               </a>
               <span class="tooltip">Archief</span>
             </li>
              <li class="{{ (request()->segment(3) == 'aanmaken') ? 'active' : '' }}">
               <a href="/admin/reserveringen/aanmaken">
                 <i class='fas fa-plus' ></i>
                 <span class="links_name">Aanmaken</span>
               </a>
               <span class="tooltip">Aanmaken</span>
             </li>



             <li class="profile">
                 <div class="profile-details">
                   <!--<img src="profile.jpg" alt="profileImg">-->
                   <div class="name_job">
                     <div class="name">Admin Account</div>
                     <div class="job"> ijverig</div>
                     <div class="logout">
                       <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">

                          <i class='bx bx-log-out' id="log_out" ></i>
                      </a>
                  </div>
                   </div>
                 </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
             </li>
            </ul>
          </div>

          <section class="home-section">
              @yield('content')
          </section>
                
    <!-- js Livewire -->
    @livewireScripts


    <!-- Jquery.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>

    <!-- Tilt.js -->
    <script src="{{ asset('js/tilt.jquery.js') }}"></script>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    $(function() {
      AOS.init({
        duration: 3000, // values from 0 to 3000, with step 50ms
        });
    });

    </script>

    <script type="text/javascript">
        $(window).ready(function(){
            if (window.screen.width <= 700) {
                $(".sidebar").removeClass("open");
            } else {
              $(".sidebar").addClass("open");  
            }
        });
        
        window.addEventListener('swal:modal', event => { 
            swal({
              title: event.detail.message,
              text: event.detail.text,
              icon: event.detail.type,
            });
        });
    </script>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>

</body>
</html>
