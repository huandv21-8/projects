<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> Supermarket@gmail.com</li>
                            <li>Free Shipping for all Order of $99</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                        <img src="{{asset('super-market/img/language.png')}}" alt="">
                            <div>English</div>
                            <ul>
                                <li><a href="#">English</a></li>
                                <li><a href="#">Vietnamese</a></li>
                            </ul>
                        </div>
                        @if(isset($name_userlogin))
                            <div class="header__top__right__language">

                                <a href="{{route('logout_exit')}}"><i class="fa fa-user"></i> {{$name_userlogin->name}}</a>
                                <ul>
                                
                                <li class="dropdown mega-menu">
                                   
                                        <li>
                                         <a href="{{route('infor_user')}}" tabindex="0" class="dropdown-item">Informaion</a>
                                        </li>
                                        <li>
                                            <a href="#" tabindex="0" class="dropdown-item">Change password</a>
                                        </li>
                                        <li style=": 10px 0">
                                            <a href="{{route('logout_exit')}}" onclick="event.preventDefault();
                                            localStorage.removeItem('cart');
                                            document.getElementById('logout-form').submit();" class="dropdown-item ">
                                                Log out
                                            </a>
                                        </li>
                                    <!-- </ul> -->
                                    <form id="logout-form" action="{{route('logout_exit')}}" method="POST"
                                style="display: none;">
                                @csrf
                                </form>

                                </li>
                            </ul>
                            </div> 
                        @else
                            <div class="header__top__right__auth">
                                <a href="{{route('home')}}"><i class="fa fa-user"></i> Login</a>
                            </div>
                        @endif    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                <a href="./index.html"><img src="{{asset('super-market/img/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('shopGrid') }}">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                {{-- <li><a href="./shop-details.html">Shop Details</a></li> --}}
                                <li><a href="{{ route('shoppingCart') }}">Shoping Cart</a></li>
                                <li><a href="{{ route('layout-checkout') }}">Check Out</a></li>
                                {{-- <li><a href="./blog-details.html">Blog Details</a></li> --}}
                            </ul>
                        </li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">

                <div class="header__cart">
                    <ul class="nav-right">
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li class="cart-icon">
                            <a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="soluong"></span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody id="cart_home">




                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total" style="border-top:1px ">
                                    <span>total:</span>
                                    <h5 id="total">$0</h5>
                                </div>
                                <div class="select-button">
                                    <a href="{{ route('shoppingCart') }}" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="{{ route('layout-checkout') }}" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- <div class="header__cart__price">item: <span>$150.00</span></div> -->
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
