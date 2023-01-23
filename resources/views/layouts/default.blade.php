<!DOCTYPE html>
<html lang="tr-TR" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    Document Title
    =============================================
    -->
    <title>AY MEDYA | @yield('title')</title>
    @include('static.head')

</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">

<main>
    <div class="page-loader">
        <div class="loader">Yükleniyor...</div>
    </div>
    @yield('navbar')
    @include('static.navbar')
    @yield('homesection')


    <div class="main">
        @yield('content')







        @yield('footer')
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
</main>
<!--
JavaScripts
=============================================
-->
@yield('foot')
@include('static.foot')
</body>
</html>