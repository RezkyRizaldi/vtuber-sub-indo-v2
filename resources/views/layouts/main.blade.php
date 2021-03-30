<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" translate="no">

<head>
  {{-- Required Meta Tags --}}
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  {{-- CSRF Token --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- Primary --}}
  <meta itemprop="title" content="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}" />
  <meta itemprop="description"
    content="Vtuber Sub Indo adalah sebuah komunitas Clipper yang mewadahi para Clipper Vtuber. Tujuan dari Vtuber Sub Indo yaitu menjadi garda terdepan Channel Clip Vtuber ber-subtitle Indonesia untuk menarik para penonton masuk ke lubang hitam yang sama seperti kita saat ini." />
  <meta itemprop="image" content="{{ asset('assets/images/brand.jpg') }}" />
  <meta name="copyright" content="Muhamad Rezky Rizaldi" />
  <meta name="language" content="en" />
  <meta name="robots" content="index, follow" />
  <meta name="revised" content="Thursday, March 4th, 2021, 0:16 AM" />
  <meta name="abstract" content />
  <meta name="topic" content="Clipper Vtuber" />
  <meta name="summary" content="Clipper Community" />
  <meta name="classification" content="Business" />
  <meta name="author" content="Muhamad Rezky Rizaldi, rezkyrizaldi30@gmail.com">
  <meta name="designer" content="Muhamad Rezky Rizaldi, rezkyrizaldi30@gmail.com">
  <meta name="category" content="Official Website" />
  <meta name="owner" content="Vtuber Sub Indo" />
  <meta name="coverage" content="Worldwide" />
  <meta name="distribution" content="Global" />
  <meta name="rating" content="General" />

  {{-- Open Graph/Facebook --}}
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://vsi.hadatmtch.net" />
  <meta property="og:title" content="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}" />
  <meta property="og:image" content="{{ asset('assets/images/brand.jpg') }}" />
  <meta property="og:description"
    content="Vtuber Sub Indo adalah sebuah komunitas Clipper yang mewadahi para Clipper Vtuber. Tujuan Vtuber Sub Indo yaitu menjadi garda terdepan Channel Clip Vtuber ber-subtitle Indonesia untuk menarik penonton masuk ke lubang hitam yang sama seperti kita saat ini." />
  <meta property="og:keywords"
    content="HTML, CSS, JavaScript, Bootstrap, Bootstrap 5, Vtuber Sub Indo, Virtual Youtuber, Vtuber" />
  <meta property="og:region" content="ID" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:country-property" content="ID" />
  <meta property="og:email" content="vtubersubindo@gmail.com" />
  <meta property="og:image:type" content="image/jpg" />
  <meta property="og:image:alt" content="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}" />
  <meta property="og:author" content="Muhamad Rezky Rizaldi" />
  <meta property="og:site_name" content="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}" />

  {{-- Twitter --}}
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://vsi.hadatmtch.net" />
  <meta property="twitter:title" content="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}" />
  <meta property="twitter:description" content="Vtuber Sub Indo adalah sebuah komunitas Clipper yang mewadahi para Clipper Vtuber. Tujuan Vtuber Sub Indo yaitu menjadi garda terdepan Channel Clip Vtuber ber-subtitle Indonesia untuk menarik para penonton masuk ke lubang
    hitam yang sama seperti kita saat ini." />
  <meta property="twitter:image" content="{{ asset('assets/images/brand.jpg') }}" />

  {{-- Google --}}
  <meta name="google" content="notranslate" />

  {{-- Apple Meta --}}
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-touch-fullscreen" content="yes" />
  <meta name="apple-moblie-web-app-status-bar-style" content="black" />
  <meta name="format-detection" content="telephone=no" />
  {{-- <meta name="viewport" content="width=320, initial-scale=2.3, user-scalable=no" />
  <meta name="viewport" content="width=device-width" />
  <meta name="viewport" content="initial-scale=1.0" />
  <meta name="viewport" content="initial-scale=2.3, user-scalable=no" /> --}}
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('assets/images/icon/apple-touch-icon-57x57.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/images/icon/apple-touch-icon-114x114.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/images/icon/apple-touch-icon-72x72.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/images/icon/apple-touch-icon-144x144.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('assets/images/icon/apple-touch-icon-60x60.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('assets/images/icon/apple-touch-icon-120x120.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('assets/images/icon/apple-touch-icon-76x76.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('assets/images/icon/apple-touch-icon-152x152.png') }}" />
  <link rel="icon" type="image/png" href="{{ asset('assets/images/icon/favicon-196x196.png') }}" sizes="196x196" />
  <link rel="icon" type="image/png" href="{{ asset('assets/images/icon/favicon-96x96.png') }}" sizes="96x96" />
  <link rel="icon" type="image/png" href="{{ asset('assets/images/icon/favicon-32x32.png') }}" sizes="32x32" />
  <link rel="icon" type="image/png" href="{{ asset('assets/images/icon/favicon-16x16.png') }}" sizes="16x16" />
  <link rel="icon" type="image/png" href="{{ asset('assets/images/icon/favicon-128.png') }}" sizes="128x128" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="{{ asset('assets/images/icon/mstile-144x144.png') }}" />
  <meta name="msapplication-square70x70logo" content="{{ asset('assets/images/icon/mstile-70x70.png') }}" />
  <meta name="msapplication-square150x150logo" content="{{ asset('assets/images/icon/mstile-150x150.png') }}" />
  <meta name="msapplication-wide310x150logo" content="{{ asset('assets/images/icon/mstile-310x150.png') }}" />
  <meta name="msapplication-square310x310logo" content="{{ asset('assets/images/icon/mstile-310x310.png') }}" />

  {{-- IE --}}
  <meta http-equiv="Page-Enter" content="RevealTrans(Duration=2.0, Transition=2)" />
  <meta http-equiv="Page-Exit" content="RevealTrans(Duration=3.0, Transition=12)" />
  <meta name="mssmarttagspreventparsing" content="true" />
  <meta http-equiv="X-UA-Compatible" content="chrome=1" />
  <meta name="msapplication-starturl" content="https://vsi.hadatmtch.net/" />
  <meta name="msapplication-window" content="width=800;height=600" />
  <meta name="msapplication-navbutton-color" content="blue" />
  <meta name="application-name" content="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}" />
  <meta name="msappliaction-tooltip" content="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}" />

  {{-- HTML --}}
  <link rel="fluid-icon" href="{{ asset('assets/images/logo.png') }}" type="image/png" />
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
  <link rel="author" href="https://rezkyrizaldi.herokuapp.com" />

  {{-- Bootstrap CSS --}}
  {{-- <link rel="preload" as="style" href="{{ asset('assets/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css') }}" /> --}}
  <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css') }}" />

  {{-- Bootstrap Icons --}}
  {{-- <link rel="preload" as="style" href="{{ asset('assets/bootstrap-icons-1.4.1/bootstrap-icons.css') }}" /> --}}
  <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons-1.4.1/bootstrap-icons.css') }}" />

  {{-- Swiper CSS --}}
  {{-- <link rel="preload" as="style" href="{{ asset('assets/css/swiper-bundle.min.css') }}" /> --}}
  <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />

  {{-- My CSS --}}
  {{-- <link rel="preload" as="style" href="{{ asset('assets/css/style.css') }}" /> --}}
  {{-- <link rel="preload" as="style" href="{{ asset('assets/css/dark-mode.css') }}" /> --}}
  {{-- <link rel="preload" as="style" href="{{ asset('assets/css/swiper.css') }}" /> --}}
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/dark-mode.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}" />
  <title>@yield('title')</title>
</head>

<body id="body" ondragstart="return false;">
  {{-- Loader --}}
  <div id="loader"></div>

  {{-- Page --}}
  <div id="page">
    @section('navbar')
      @parent
      @include('layouts.navbar')
    @show

    @yield('content')

    @section('footer')
      @parent
      @include('layouts.footer')
    @show

  </div>
  @section('modal')
    @parent
    @include('layouts.modal')
  @show
  {{-- End Page --}}
</body>

</html>
