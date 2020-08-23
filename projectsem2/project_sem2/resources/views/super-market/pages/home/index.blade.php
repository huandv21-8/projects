@extends('super-market.layouts.master')

@section('title')
    Supermarket | Home
@endsection

@section('hero')
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            @foreach ($categoryList as $value)
                                <li><a
                                        href="{{ route('categoryDetail', $value->id_category) }}">{{ $value->name_category }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <div>
                                <form>
                                    <div class="hero__search__categories">
                                        All Categories
                                        {{-- <span class="arrow_carrot-down"></span> --}}
                                    </div>
                                    <input type="text" name="country_name" id="country_name"
                                        class="search-input form-control input-lg" placeholder="What do you need?" />
                                    <button type="submit" class="site-btn">SEARCH</button>
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>

                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 456.789.999</h5>
                                <span>Support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div id="countryList">
                    </div>

                    <div class="hero__item set-bg" data-setbg="{{ asset('super-market/img/hero/banner.jpg') }}">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                        <a href="{{route('shopGrid')}}" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('categories')
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach ($productList as $item)
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{ $item->image }}">
                                <h5><a href="{{ route('productDetail', $item->id_product) }}">{{ $item->name_product }}</a>
                                </h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

@section('featured')
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($productList as $value)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="{{ $value->image }}">
                                <ul class="featured__item__pic__hover">
                                    <li><a href=""><i class="fa fa-heart"></i></a></li>
                                    <li><a href="{{ route('productDetail', $value->id_product) }}"><i
                                                class="fa fa-retweet"></i></a></li>
                                    <li><a class="1add_to_cart" href="#"
                                            onclick="addToCart({{ $value->id_product }}, '{{ $value->name_product }}', {{ $value->price }}, '{{ $value->image }}')">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">{{ $value->name_product }}</a></h6>
                                <h5>$ {{ number_format($value->price) }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('banner')
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                    <img src="{{asset('super-market/img/banner/banner-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('super-market/img/banner/banner-2.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('latest')
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">

                                @for ($i = 0; $i < 3; $i++)
                                    <a href="{{ route('productDetail', $latest_product[$i]->id_product) }}"
                                        class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img style="width: 100px" src="{{ $latest_product[$i]->image }}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $latest_product[$i]->name_product }}</h6>
                                            <span>${{ number_format($latest_product[$i]->price) }}</span>
                                        </div>
                                    </a>
                                @endfor

                            </div>
                            <div class="latest-prdouct__slider__item">
                                @for ($i = 3; $i < count($latest_product); $i++)
                                    <a href="{{ route('productDetail', $latest_product[$i]->id_product) }}"
                                        class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img style="width: 100px" src="{{ $latest_product[$i]->image }}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $latest_product[$i]->name_product }}</h6>
                                            <span>${{ number_format($latest_product[$i]->price) }}</span>
                                        </div>
                                    </a>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @for ($i = 0; $i < 3; $i++)
                                    <a href="{{ route('productDetail', $rated_product[$i]->id_product) }}"
                                        class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img style="width: 100px" src="{{ $rated_product[$i]->image }}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $rated_product[$i]->name_product }}</h6>
                                            <span>${{ number_format($rated_product[$i]->price) }}</span>
                                        </div>
                                    </a>
                                @endfor
                            </div>
                            <div class="latest-prdouct__slider__item">
                                @for ($i = 3; $i < count($rated_product); $i++)
                                    <a href="{{ route('productDetail', $rated_product[$i]->id_product) }}"
                                        class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img style="width: 100px" src="{{ $rated_product[$i]->image }}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $rated_product[$i]->name_product }}</h6>
                                            <span>${{ number_format($rated_product[$i]->price) }}</span>
                                        </div>
                                    </a>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Best-selling Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @for ($i = 0; $i < 3; $i++)
                                    <a href="{{ route('productDetail', $sold_product[$i]->id_product) }}"
                                        class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img style="width: 100px" src="{{ $sold_product[$i]->image }}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $sold_product[$i]->name_product }}</h6>
                                            <span>${{ number_format($sold_product[$i]->price) }}</span>
                                        </div>
                                    </a>
                                @endfor
                            </div>
                            <div class="latest-prdouct__slider__item">
                                @for ($i = 3; $i < count($sold_product); $i++)
                                    <a href="{{ route('productDetail', $sold_product[$i]->id_product) }}"
                                        class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img style="width: 100px" src="{{ $sold_product[$i]->image }}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $sold_product[$i]->name_product }}</h6>
                                            <span>${{ number_format($sold_product[$i]->price) }}</span>
                                        </div>
                                    </a>
                                @endfor


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('blog')
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                        <img src="{{asset('super-market/img/blog/blog-1.jpg')}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('super-market/img/blog/blog-2.jpg')}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('super-market/img/blog/blog-3.jpg')}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var cartList = [];
        var total = 0;
        var json = localStorage.getItem('cart')
        if (json != null && json != '') {
            cartList = JSON.parse(json)
            showCart();
        }

        // function addToCart(id, title, price, image) {
            // isFind = false;

        
            // for (var i = 0; i < cartList.length; i++) {
            //     if (cartList[i].id == id) {

            //         isFind = true;
            //         cartList[i].num++;
            //         break;
            //     }
            // }
            // if (!isFind) {
            //     cartList.push({
            //         'title': title,
            //         'price': price,
            //         'id': id,
            //         'image': image,
            //         'num': 1
            //     })
            // }
            // localStorage.setItem('cart', JSON.stringify(cartList))
            // alert('add product to cart')
            // showCart();
        // }

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
@endsection
