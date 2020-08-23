@extends('super-market.layouts.master')


@section('title')
   Supermarket | Product detail
@endsection

@section('hero')
    @include('super-market.partial.hero')
@endsection

@section('categories')
<section class="breadcrumb-section set-bg" data-setbg="{{asset('super-market/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Product detail</h2>
                        <div class="breadcrumb__option">
                        <a href="{{route('index')}}">Home</a>
                            {{-- <a href="./index.html">Vegetables</a> --}}
                            <span>Product</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('banner')
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            @foreach($product as $item)
                                <img class="product__details__pic__item--large" src="{{ $item->image }}" alt="">
                            @endforeach

                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            @if(isset($image_product))
                                @foreach($image_product as $item)
                                    <img data-imgbigurl="{{ $item->link_image }}" src="{{ $item->link_image }}" alt="">
                                @endforeach
                            @endif

                            @foreach($product as $item)
                                <img data-imgbigurl="{{ $item->image }}" src="{{ $item->image }}" alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    @foreach($product as $item)
                        <div class="product__details__text">
                            <h3>{{ $item->name_product }}</h3>
                            <div class="product__details__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <span>(18 reviews)</span>
                            </div>
                            <div class="product__details__price">{{ number_format($item->price) }}</div>
                            <p>{{ $item->describe }}--Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                                Vestibulum ac diam sit amet quam
                                vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet
                                quam vehicula elementum sed sit amet dui. Proin eget tortor risus.</p>
                            {{-- <div class="product__details__quantity">
                                                        <div class="quantity">
                                                            <div class="pro-qty">
                                                                <input type="text" value="1">
                                                            </div>
                                                        </div>
                                                    </div> --}}
                            <a href="#" class="primary-btn" onclick="addToCart({{ $item->id_product }}, '{{ $item->name_product }}',
                                                      {{ $item->price }}, '{{ $item->image }}')">ADD TO CARD</a>
                            {{-- <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a> --}}
                            <ul>
                                <li><b>Availability</b> <span>In Stock</span></li>
                                <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                                {{-- <li><b>Weight</b> <span>0.5 kg</span></li> --}}
                                <li><b>Share on</b>
                                    <div class="share">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus
                                        suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam
                                        vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat,
                                        accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a
                                        pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula
                                        elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus
                                        et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam
                                        vel, ullamcorper sit amet ligula. Proin eget tortor risus.</p>
                                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                        elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                        porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                        nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed
                                        porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum
                                        sed sit amet dui. Proin eget tortor risus.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                        elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                        porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                        nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('latest')
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($Related_product as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ $item->image }}">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="{{ route('productDetail', $item->id_product) }}"><i
                                                class="fa fa-retweet"></i></a></li>
                                    <li><a onclick="addToCart({{ $item->id_product }}, '{{ $item->name_product }}',
                                                        {{ $item->price }}, '{{ $item->image }}')"><i
                                                class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">{{ $item->name_product }}</a></h6>
                                <h5>$ {{ number_format($item->price) }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                {!! $Related_product->links() !!}

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
            showCart();
        }

        function addToCart(id, title, price, image) {
            isFind = false;
            for (var i = 0; i < cartList.length; i++) {
                if (cartList[i].id == id) {
                    isFind = true;
                    cartList[i].num++;
                    break;
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
            alert('Them san pham thanh cong')
            showCart();
        }

        function showCart() {
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
        }

    </script>
@endsection
