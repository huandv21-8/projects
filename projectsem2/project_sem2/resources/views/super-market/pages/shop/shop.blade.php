@extends('super-market.layouts.master')


@section('title')
    Supermarket | Shop
@endsection

@section('hero')
    @include('super-market.partial.hero')
@endsection

@section('categories')
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('super-market/img/breadcrumb.jpg') }}"
        style="background-image: url('{{ asset('super-market/img/breadcrumb.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Organi Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('index')}}">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
@section('latest')
    @php
    $categoryList = DB::table('category')->get();
    @endphp
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Department</h4>
                            <ul>
                                @foreach($categoryList as $value)
                                    <li><a href="{{ route('categoryDetail', $value->id_category) }}">
                                            {{ $value->name_category }}</a>
                                    </li>

                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="540">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__item sidebar__item__color--option">
                            <h4>Colors</h4>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="white">
                                    White
                                    <input type="radio" id="white">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--gray">
                                <label for="gray">
                                    Gray
                                    <input type="radio" id="gray">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--red">
                                <label for="red">
                                    Red
                                    <input type="radio" id="red">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--black">
                                <label for="black">
                                    Black
                                    <input type="radio" id="black">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--blue">
                                <label for="blue">
                                    Blue
                                    <input type="radio" id="blue">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--green">
                                <label for="green">
                                    Green
                                    <input type="radio" id="green">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h4>Popular Size</h4>
                            <div class="sidebar__item__size">
                                <label for="large">
                                    Large
                                    <input type="radio" id="large">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="medium">
                                    Medium
                                    <input type="radio" id="medium">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="small">
                                    Small
                                    <input type="radio" id="small">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="tiny">
                                    Tiny
                                    <input type="radio" id="tiny">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Latest Products</h4>
                                <div class="latest-product__slider owl-carousel">
                                    @for($i = 0; $i < (count($latest_product) / 3); $i++)

                                        <div class="latest-prdouct__slider__item">
                                            @foreach($latest_product as $item)

                                                <a href="{{ route('productDetail', $item->id_product) }}"
                                                    class="latest-product__item">
                                                    <div class="latest-product__item__pic">
                                                        <img style="width: 100px" src="{{ $item->image }}" alt="">
                                                    </div>
                                                    <div class="latest-product__item__text">
                                                        <h6>{{ $item->name_product }}</h6>
                                                        <span>${{ number_format($item->price) }}</span>
                                                    </div>
                                                </a>
                                        @endforeach


                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="product__discount">
                    <div class="section-title product__discount__title">
                        <h2>Sale Off</h2>
                    </div>

                    <div class="row">
                        <div class="product__discount__slider owl-carousel">
                            @foreach($productSale as $item)
                                @php
                                $sale = rand(10,30);
                                $price_sale= $item->price -($item->price * ( $sale/100));
                                @endphp
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg" data-setbg="{{ $item->image }}">
                                            <div class="product__discount__percent">{{ $sale }}%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="{{ route('productDetail', $item->id_product) }}">
                                                  <i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"
                                                        onclick="addToCart({{ $item->id_product }}, '{{ $item->name_product }}', {{ $price_sale }}, '{{ $item->image }}')">
                                                        <i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>{{ $item->name_category }}</span>
                                            <h5><a href="#">{{ $item->name_product }}</a></h5>
                                            <div class="product__item__price">${{ number_format($price_sale) }}
                                                <span>${{ number_format($item->price) }}</span></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                                <span>Sort By</span>
                                <select>
                                    <option value="0">Default</option>
                                    <option value="0">Default</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span>{{ count($product) }}</span> Products found</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                {{-- <span class="icon_grid-2x2"></span>
                                <span class="icon_ul"></span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($product as $item)

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ $item->image }}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="{{ route('productDetail', $item->id_product) }}"><i
                                                    class="fa fa-retweet"></i></a></li>
                                        <li><a href="#" onclick="addToCart({{ $item->id_product }}, '{{ $item->name_product }}',
                                                        {{ $item->price }}, '{{ $item->image }}')"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">{{ $item->name_product }}</a></h6>
                                    <h5>${{ number_format($item->price) }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                {{ $product->links() }}
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
            // alert('test ngon1')
            showCart1();
        }

        function showCart1() {
            //   alert('test thanh cong')
            total = 0;
            $('#cartList').empty()
            for (var i = 0; i < cartList.length; i++) {


                $('#cartList').append(`<tr>
                                                                <td class="shoping__cart__item">
                                                                    <img src="${cartList[i].image}" alt="" style="width: 100px;">
                                                                    <h5> ${cartList[i].title}</h5>
                                                                </td>
                                                                <td class="shoping__cart__price">
                                                                    $${cartList[i].price}
                                                                </td>
                                                                <td class="shoping__cart__quantity">
                                                                    <div class="quantity">
                                                                        <div class="pro-qty" ><span class="dec qtybtn" onclick="deletedQuantity(${cartList[i].id})">-</span>
                                                                            <input type="text" value="${cartList[i].num}">
                                                                        <span class="inc qtybtn" onclick="plusQuantity(${cartList[i].id})">+</span></div>
                                                                    </div>
                                                                </td>
                                                                <td class="shoping__cart__total">
                                                                    $${cartList[i].price * cartList[i].num}
                                                                </td>
                                                                <td class="shoping__cart__item__close">
                                                                    <span class="icon_close"></span>
                                                                </td>
                                                            </tr>`)
                total += cartList[i].price * cartList[i].num

            }
            $('#total').text('$' + total)
            $('.soluong').text(cartList.length)
            $('#Subtotal').text('$' + total)
            $('#total2').text('$' + total)

        }

        function deletedQuantity(id) {
            for (var i = 0; i < cartList.length; i++) {
                if (cartList[i].id == id) {

                    if (cartList[i].num > 1) {

                        cartList[i].num--

                    } else {
                        cartList.splice(i, 1)

                    }
                    break

                }

            }

            localStorage.setItem('cart', JSON.stringify(cartList))
            showCart1()
            showCart()
        }

        function plusQuantity(id) {
            for (var i = 0; i < cartList.length; i++) {
                if (cartList[i].id == id) {
                    cartList[i].num++
                    break
                }
            }
            localStorage.setItem('cart', JSON.stringify(cartList))
            showCart()
            showCart1()
        }

    </script>
@endsection
