<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>أورينتال</title>
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="Taha">
   <meta property="og:title" content="">
   <meta property="og:type" content="">
   <meta property="og:url" content="">
   <meta property="og:image" content="">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link rel="shortcut icon" href="{{ asset('front/images/favicon.png') }}">
   <!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script><![endif]-->
   <script type='text/javascript' src='//kit.fontawesome.com/d6d117068c.js?ver=5.6' id='fonts-kit-js'></script>
   <link rel='stylesheet' href="{{ asset('front/css/bootstrap.min.css') }}" type='text/css' />
   <link rel='stylesheet' href="{{ asset('front/css/animate.min.css') }}" type='text/css' />
   <link rel='stylesheet' href="{{ asset('front/css/owl.carousel.min.css') }}" type='text/css' />
   <link rel='stylesheet' href="{{ asset('front/css/owl.theme.default.min.css') }}" type='text/css' />
   <link rel='stylesheet' href="{{ asset('front/css/magnific-popup.css') }}" type='text/css' />
   <link rel='stylesheet' href="{{ asset('front/css/icofont.min.css') }}" type='text/css' />
   <link rel='stylesheet' href="{{ asset('front/css/style.css') }}" type='text/css' />
   <link rel='stylesheet' href="{{ asset('front/css/style-pages.css') }}" type='text/css' />
   <link rel='stylesheet' href="{{ asset('front/css/responsive.css') }}" type='text/css' />
</head>

<body>
   <div class="wrapper">
      <!--header-->
      <header dir="ltr">
         <nav class="navbar navbar-inverse navbar-expand-lg header-nav fixed-top light-header">
            <div class="container">
               <a class="navbar-brand brand1" href="">
                  <img class="light img-fluid" src="{{ asset(settings()->logo) }}" alt="alt">
               </a>
               <a class="navbar-brand brand2" href="">
                  <img src="{{ asset(settings()->logo_dark) }}" alt="">
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCodeply">
                  <i class="icofont icofont-navigation-menu"></i>
               </button>
               <div class="collapse navbar-collapse navbar-nav" id="navbarCodeply" dir="rtl">
                  <ul class="navbar-nav">
                     <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                        <a class="nav-link" aria-current="page" href="/">الرئيسية</a>
                     </li>
                     <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about') }}">من نحن</a>
                     </li>
                     <li class="nav-item {{ (request()->is('services')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('services') }}">الخدمات</a>
                     </li>
                     <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact') }}">تواصل معنا</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <!--header-->
