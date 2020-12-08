

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminPanleFramework.css') }}" rel="stylesheet" >
    <!-- Styles cdn -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
  <!-- extranel page -->
  @yield('css')

  @yield('js')
  </head>
  <body token={{csrf_token()}}>
<div id="app">
  <!-- start full page loader -->
      <div class="fullpage-loader d-none">
        <div class="lds-ripple">
          <div></div><div></div>
          <div></div><div></div>
        </div>
      </div>
  <!-- end fullpage loader -->
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
     <div class="row">
      <div class="left_area col-2">
        <h4 class="logo-lg">Wap<span>Erp Solution</span></h4>
        <h4 class="logo-sm">W<span>ES</span></h4>
      </div>
      <div class="middle_area col-5 pt-0">
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
        <!-- <i class="fas fa-bars" id="sidebar_btn" onclick="document.querySelector('.mobile_nav_items').classList.toggle('active');"></i> -->
      </label>
      </div>
      
      <div class="right_area col-5">
        <a href="{{ route('logout') }}" class="logout_btn" >Logout</a>
      </div>
    </div>
    </header>
    <!--header area end-->
 
  <!-- start sidebar area -->
    
      <!-- <div class="profile_info">
        <img src="1.png" class="profile_image" alt="">
        <h4>Jessica</h4>
      </div>  -->
     
    <div class="sidebar">
        <x-panel-menu class="navbar-nav" />
    </div>

    <!-- end sidebar area -->
    <!-- main content start -->
    <div class="content" id="app">
     @yield('content')
    </div>
    
</div>
    <!-- main content end -->
    <script type="text/javascript">

    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });

    </script>
     <script src="{{ asset('js/app.js') }}" defer></script>

  </body>
</html>