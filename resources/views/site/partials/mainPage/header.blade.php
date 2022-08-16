<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8" />
  <meta content="IE=edge" http-equiv="X-UA-Compatible" />
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
  <title>@yield('pageTitle', 'Ali Rasouli')</title>
  <meta name="description" content="Add your business website description here" />
  <meta name="keywords" content="Add your business website keywords here" />
  <link href="favicon.ico" rel="icon" />
  <link rel="stylesheet" href="{{ asset('site/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('site/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('site/css/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('site/css/owl.theme.default.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('site/css/lightbox.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('site/css/animate.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('site/css/parallax.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('site/css/style.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('site/css/responsive.css') }}" type="text/css" />
  @yield('headerStyles')
</head>
<body>
  <header id="header" class="header fixed-top headerbg-darkcolor nav-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <nav class="navbar navbar-expand-lg navbar-light mgsb4navbar">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation" onclick="mgsChangeMenubar(this)">
              <span class="menubar1"></span> <span class="menubar2"></span>
              <span class="menubar3"></span>
            </button>
            <a class="navbar-brand d-md-block d-lg-none" href="index-animated.html">
              <img class="logo logo-white" src="images/logo.png" alt="logo" />
              <img class="logo logo-color" src="images/logo-color.png" alt="logo" />
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <a class="navbar-brand d-none d-sm-none d-md-none d-lg-block" href="index-animated.html">
                <img class="logo logo-white" src="images/logo.png" alt="logo" />
                <img class="logo logo-color" src="images/logo-color.png" alt="logo" />
              </a>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#service">Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#pricingtable">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#blog">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>