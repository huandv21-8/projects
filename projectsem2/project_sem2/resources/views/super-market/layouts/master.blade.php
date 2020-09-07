<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/5e5457d628.js" crossorigin="anonymous"></script>
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('super-market/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('super-market/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('super-market/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('super-market/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('super-market/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('super-market/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('super-market/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('super-market/css/style.css') }}" type="text/css">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('super-market/img/logo1.png')}}">



    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <style type="text/css">
        .search_product:hover {
            color: red;
        }

    </style>


</head>

<body onload="@yield('testcart')">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="#">Vietnamese</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> Supermarket@gmail.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    @include('super-market.partial.header')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    @yield('hero')
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    @yield('categories')
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    @yield('featured')
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    @yield('banner')
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    @yield('latest')
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    @yield('blog')
    <!-- Blog Section End -->

    <!-- product Section Begin -->
    @yield('product')
    <!-- product Section End -->

    <!-- product Section Begin -->
    @yield('map')
    <!-- product Section End -->

    <!-- product Section Begin -->
    @yield('contact_form')
    <!-- product Section End -->

    <!-- product Section Begin -->
    @yield('checkout')
    <!-- product Section End -->

    @yield('script')
    <!-- Footer Section Begin -->
    @include('super-market.partial.footer')
    <!-- Footer Section End -->
    <script>
        var cartList = [];
        var total = 0;
        var json = localStorage.getItem('cart')
        if (json != null && json != '') {
            cartList = JSON.parse(json)
            showCart();
        }

        function addToCart(id, title, price, image) {
            isFind = false;
            $.post('{{ route('checkQuantityProduct') }}', {
			'_token': '{{ csrf_token() }}',

			'id': id, //id produck user click

		}, function(data) {
            if(data <1){
                alert('Sorry, the product is out of stock')
            }else{
                for (var i = 0; i < cartList.length; i++) {
                    if (cartList[i].id == id) {
                        if((cartList[i].num+1) >data){
                            isFind = true;
                            alert('Sorry, the product is out of stock')
                            return;
                        }else{

                            isFind = true;
                            cartList[i].num++;
                            break;
                        }

                    }
                }
                if (!isFind) {
                    cartList.push({
                        'title': title,
                        'price': price,
                        'id': id,
                        'image': image,
                        'num': 1
                    })
                 }
                localStorage.setItem('cart', JSON.stringify(cartList))
                alert('add product to cart success')
                showCart();
            }

            // window.location="{{route('index')}}";
		})


        }

        function showCart() {
            total = 0;
            $('#cart_home').empty()
            for (var i = 0; i < cartList.length; i++) {

                $('#cart_home').append(`  <tr>
                                                    <td class="si-pic"><img src="${cartList[i].image}"
                                                            style="width: 100px" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$${cartList[i].price} X ${cartList[i].num}</p>
                                                            <h6>${cartList[i].title}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close"style="	padding-left: 18px;">
                                                        <i class="fas fa-times" onclick="checkX(${cartList[i].id})"></i>
                                                    </td>
                                                </tr>`)

                total += cartList[i].price * cartList[i].num
            }
            $('#total').text('$' + total)
            $('.soluong').text(cartList.length)

        }

        function checkX(id) {

            for (var i = 0; i < cartList.length; i++) {
                if (cartList[i].id == id) {


                    cartList.splice(i, 1)
                    break

                }

            }

            localStorage.setItem('cart', JSON.stringify(cartList))
            showCart()

        }

    </script>

    <script>
        $(document).ready(function() {

            $('#country_name').keyup(function() { //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
                var query = $(this).val(); //lấy gía trị ng dùng gõ
                if (query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
                {
                    var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
                    $.ajax({
                        url: "{{ route('search') }}", // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
                        method: "POST", // phương thức gửi dữ liệu.
                        data: {
                            query: query,
                            _token: _token
                        },
                        success: function(data) { //dữ liệu nhận về
                            $('#countryList').fadeIn();
                            $('#countryList').html(
                                data
                                ); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là countryList
                        }
                    });
                } else {
                    var product = document.getElementById('countryList');
                    product.style.display = "none";
                }
            });

            $(document).on('click', 'li', function() {
                $('#country_name').val($(this).text());
                $('#countryList').fadeOut();
            });

        });

    </script>
    <!-- Js Plugins -->
    <script src="{{ asset('super-market/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('super-market/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('super-market/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('super-market/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('super-market/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('super-market/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('super-market/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('super-market/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>




</body>

</html>
