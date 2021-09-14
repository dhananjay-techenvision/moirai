<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Moirai</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="{{ asset('Website/images/favicon.ico') }}">
  
  <!-- style -->

 
  @toastr_css
  <!-- endbuild -->
</head>
        


    @yield('body')
    @include('layouts.website_footer')
    @toastr_js
    @toastr_render

</html>