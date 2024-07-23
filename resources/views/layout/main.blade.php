<!doctype html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>{{ $title ?? config('app.name','Cesco Logistics')  }} - Cesco Logistics</title>

   <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

   <!-- inject:css-->

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/bootstrap/bootstrap.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/magnific-popup.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/fontawesome.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/select2.min.css') }}">
   
   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/line-awesome.min.css') }}">


   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

   <!-- endinject -->

   <link rel="icon" type="image/png" sizes="16x16" href="img/icon.jpg">

   <!-- Fonts -->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
   @yield('css')
</head>

<body class="layout-light side-menu">
   <div class="mobile-search">
      <form action="/" class="search-form">
         <img src="img/svg/search.svg" alt="search" class="svg">
         <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
      </form>
   </div>
   <div class="mobile-author-actions"></div>
   <header class="header-top">
      <nav class="navbar navbar-light">
         <div class="navbar-left">
            <div class="logo-area">
               <a class="navbar-brand" href="">
                  <img class="light" src="img/logo cesco menyamping dark.png" alt="logo">
                  <img class="dark" src="img/logo cesco menyamping.png"  alt="logo">
               </a>
               <a href="#" class="sidebar-toggle">
                  <img class="svg" src="img/svg/align-center-alt.svg" alt="img"></a>
            </div>
        
         </div>
         <!-- ends: navbar-left -->
         <div class="navbar-right">
            <ul class="navbar-right__menu">
                <li class="nav-mode">
                  <a href="#" data-layout="dark">
                     <i class="uil uil-moon"></i>
                     
                  </a>
                 
               </li>
                <li class="nav-light">
                  <a href="#" data-layout="light">
                     <i class="uil uil-sun"></i>
                     
                  </a>
                 
               </li>
              
               <li class="nav-flag-select">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle"><img src="img/flag.png" alt="" class="rounded-circle"></a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper dropdown-wrapper--small">
                           <a href=""><img src="img/eng.png" alt=""> English</a>
                        
                           <a href=""><img src="img/iraq.png" alt=""> Indonesia</a>
                        </div>
                     </div>

                  </div>
               </li>

               <!-- ends: .nav-flag-select -->
               <li class="nav-author">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle"><img src="img/author-nav.jpg" alt="" class="rounded-circle">
                        <span class="nav-item__title">Vicky<i class="las la-angle-down nav-item__arrow"></i></span>
                     </a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper">
                           <div class="nav-author__info">
                              <div class="author-img">
                                 <img src="img/author-nav.jpg" alt="" class="rounded-circle">
                              </div>
                              <div>
                                 <h6>Vicky</h6>
                                 <span>Admin</span>
                              </div>
                           </div>
                           <div class="nav-author__options">
                              <ul>
                                 <li>
                                    <a href="">
                                       <i class="uil uil-user"></i> Profile</a>
                                 </li>
                               
                                 
                                 
                                 
                              </ul>
                              <a href="/logout" class="nav-author__signout">
                                 <i class="uil uil-sign-out-alt"></i> Sign Out</a>
                           </div>
                        </div>
                        <!-- ends: .dropdown-wrapper -->
                     </div>
                  </div>
               </li>
               <!-- ends: .nav-author -->
            </ul>
           
      </nav>
   </header>
   <main class="main-content">

     
         @include('layout.sidebar-menu')
     
         <div class="contents">
         <div class="crm mb-25">
            <div class="container-fluid">
               <div class="row ">
                  <div class="col-lg-12">

                     <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Demo 1</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Dashboard</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Demo 1</li>
                              </ol>
                           </nav>
                        </div>
                     </div>
                       {{ $slot }}

                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer class="footer-wrapper">
         <div class="footer-wrapper__inside">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6">
                     <div class="footer-copyright">
                        <p><span>© 2023</span><a href="#">Sovware</a>
                        </p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="footer-menu text-end">
                        <ul>
                           <li>
                              <a href="#">About</a>
                           </li>
                           <li>
                              <a href="#">Team</a>
                           </li>
                           <li>
                              <a href="#">Contact</a>
                           </li>
                        </ul>
                     </div>
                     <!-- ends: .Footer Menu -->
                  </div>
               </div>
            </div>
         </div>
      </footer>
   </main>
  
  
 
   <!-- inject:js-->
   
   <!-- inject:js-->
   <script src="{{ asset('assets/vendor_assets/js/jquery/jquery-3.5.1.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/jquery/jquery-ui.js') }}"></script>
   
   <script src="{{ asset('assets/vendor_assets/js/bootstrap/bootstrap.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/moment/moment.min.js') }}"></script>
   
   <script src="{{ asset('assets/vendor_assets/js/autoComplete.js') }}"></script>
   
   <script src="{{ asset('assets/vendor_assets/js/daterangepicker.js') }}"></script>
  
  
   <script src="{{ asset('assets/vendor_assets/js/jquery.countdown.min.js') }}"></script>
   
   <script src="{{ asset('assets/vendor_assets/js/jquery.magnific-popup.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/jquery.peity.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/jquery.star-rating-svg.min.js') }}"></script>
   
   
   
   
   
   <script src="{{ asset('assets/vendor_assets/js/select2.full.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/slick.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/trumbowyg.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/wickedpicker.min.js') }}"></script>
   
   
   <script src="{{ asset('assets/theme_assets/js/main.js') }}"></script>
   <!-- endinject-->
   @yield('scripts')
</body>

</html>