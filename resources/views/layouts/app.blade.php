<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name')}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("vendor/font-awesome/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/fontastic.css")}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    @stack('css')
    <link rel="stylesheet" href="{{asset("css/style.default.css")}}" id="theme-stylesheet">
    <link rel="stylesheet" href="{{asset("css/custom.css")}}">
    <link rel="shortcut icon" href="{{asset("img/favicon.ico")}}">

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      @include('layouts.header')
      <div class="page-content d-flex align-items-stretch">
        @include('layouts.navbar',['nav' => $_nav])
        <div class="content-inner">
          @yield('content')
          @include('layouts.footer')
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{asset("vendor/popper.js/umd/popper.min.js")}}"> </script>
    <script src="{{asset("vendor/bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("vendor/jquery.cookie/jquery.cookie.js")}}"> </script>
    <script src="{{asset("vendor/chart.js/Chart.min.js")}}"></script>
    <script src="{{asset("vendor/jquery-validation/jquery.validate.min.js")}}"></script>
    <script src="{{asset("js/charts-home.js")}}"></script>
    <script src="{{asset("js/front.js")}}"></script>
    @stack('script')
    @stack('js')
  </body>
</html>
