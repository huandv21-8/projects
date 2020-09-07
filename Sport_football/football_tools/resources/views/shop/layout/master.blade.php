<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <script src="https://kit.fontawesome.com/5e5457d628.js" crossorigin="anonymous"></script>
    
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('shop/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('shop/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('shop/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('shop/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('shop/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('shop/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('shop/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('shop/css/style.css')}}" type="text/css">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('shop/img/logo.png')}}">

</head>

<body>
    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div> --}}

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                    <div class="tip">2</div>
                </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                    <div class="tip">2</div>
                </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    @include('shop.partial.header')
    <!-- Header Section End -->

    <!-- Categories Section Begin -->
    @yield('part1')
    <!-- Categories Section End -->

    <!-- Product Section Begin -->
    @yield('part2')
    <!-- Product Section End -->

    <!-- Banner Section Begin -->
    @yield('part3')
    <!-- Banner Section End -->

    <!-- Trend Section Begin -->
    @yield('part4')
    <!-- Trend Section End -->

    <!-- Discount Section Begin -->
    @yield('part5')
    <!-- Discount Section End -->

    <!-- Services Section Begin -->
    @yield('part6')
    <!-- Services Section End -->

    <!-- Instagram Begin -->
    @include('shop.partial.instagram')
    <!-- Instagram End -->

    <!-- Footer Section Begin -->
   @include('shop.partial.footer')
    <!-- Footer Section End -->

    <!-- Search Begin -->
   @include('shop.partial.search')
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{asset('shop/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('shop/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('shop/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('shop/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('shop/js/mixitup.min.js')}}"></script>
    <script src="{{asset('shop/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('shop/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('shop/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('shop/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('shop/js/main.js')}}"></script>
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @yield('script')
</body>

</html>
