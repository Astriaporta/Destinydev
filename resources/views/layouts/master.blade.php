<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" id="csrfToken">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5">
    <meta name="google-site-verification" content="Rq1MLbiIiUb-DLwJxAdafUqkEWnDn5pohPVe3EayfWY" />
    {!! SEO::generate(true) !!}
    <link type="text/plain" rel="author" href="humans.txt" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css"
     crossorigin="anonymous" async defer>
    <link rel="stylesheet" href="{{mix('css/app.css')}}" type="text/css">
  </head>
  <body class="bg-home">
    <div id="app" class="h-100 is-closed">
      <app-menu></app-menu>
      @include('home.index')
      @include('services.index')
      @include('about.index')
      @include('skills.index')
      @include('contact.index')
      <!-- <app-contact></app-contact> -->
      @include('layouts.footer')
    </div>
    {!! NoCaptcha::renderJs() !!}
    <script src="{{ mix('js/manifest.js') }}" defer></script>
    <script src="{{ mix('js/vee.js') }}" defer></script>
    <script src="{{ mix('js/vue.js') }}" defer></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{mix('js/app.js')}}" defer></script>
  </body>
</html>
