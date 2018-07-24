<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" id="csrfToken">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', '') }}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
     integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body class="bg-home">
    <div id="app" class="h-100 is-closed">
      <app-menu></app-menu>
      <app-home></app-home>
      <app-services></app-services>
      <app-about></app-about>
      <app-skills></app-skills>
      <app-contact></app-contact>
      @include('layouts.footer')
    </div>
    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
