<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Villa Agency - Real Estate HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('website/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ url('website/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ url('website/css/templatemo-villa-agency.css') }}">
    <link rel="stylesheet" href="{{ url('website/css/owl.css') }}">
    <link rel="stylesheet" href="{{ url('website/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>

<body>
  @include('sweetalert::alert')
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> info@company.com</li>
            
            <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-2">
          <ul class="info">
          
            @if(session()->has('ses_userid'))
            <a href="">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
               Hi .. {{session()->get('ses_username')}}
              </span>
            </a>
            <img src="website/images/assets/users/{{session()->get('ses_userimg')}}" width="50px" />
            @endif
           
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <?php
  function active($currect_page){
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ; // current page url
    $url = end($url_array);  
    if($currect_page == $url){
      echo 'active'; //class name in css 
    } 
  }
  ?>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>Villa</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="{{url('/home')}}" class="<?php active('home')?>">Home</a></li>
                      <li><a href="{{url('/villas')}}" class="<?php active('villas')?>">Properties</a></li>
                      <li><a href="{{url('/prop_details')}}" class="<?php active('prop_details')?>" >Property Details</a></li>
                      <li><a href="{{url('/contact')}}" class="<?php active('contact')?>">Contact Us</a></li>
                      @if(session()->has('ses_userid'))
                      <li><a href="logout" >Logout</a></li>
                      @else
                      <li><a href="login" >Login</a></li>
                      @endif
                      <li><a href="#" ><i class="fa fa-calendar"></i> Schedule a visit</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
