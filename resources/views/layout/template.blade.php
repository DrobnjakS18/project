<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Start Bootstrap | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet">

</head>
<body>

<!-- Navigacija-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
@include('include.nav')
</nav>
<div class="container">
    @include('include.side')
    @yield('sadrzaj')
    @yield('login')
</div>
@include('include.footer')
