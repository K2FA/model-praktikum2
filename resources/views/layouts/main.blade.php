<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('ico/favicon.ico')}}">
    <title>Bootstrappage.com free templates</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/carousel.css')}}">



  </head>
<!-- NAVBAR
================================================== -->
  <body>

    @include('layouts.header')

    @yield('main-content')

    @include('layouts.content')

    @include('layouts.footer')



      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/holder.js')}}"></script>
  </body>
</html>
