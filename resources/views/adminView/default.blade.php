<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AY MEDYA | @yield('title')</title>
    @include('adminView.static.head')
</head>
<body>
   @include('adminView.static.navbar')

    @include('adminView.static.sidebar')
   <!--content-->
   <div class="content">


   @yield('content')







   </div>

@yield('foot')
@include('adminView.static.foot')
</body>
</html>

