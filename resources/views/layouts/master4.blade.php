<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- googleFonts --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    {{-- custom style --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--Favicon IMG-->
  <link rel="icon" href="assets/images/favicon.ico" sizes="16x16">
    <title>{{env('APP_NAME','Sales Academy')}}</title>
    </title>
</head>

<body>
    @include('includes.navbar4')
    @yield('content')
    {{-- @include('includes.footer') --}}

<script src="{{asset('js/app.js')}}"></script>

</body>

</html>
