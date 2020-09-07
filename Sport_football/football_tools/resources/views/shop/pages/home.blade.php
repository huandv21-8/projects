@extends('shop.layout.master')

@section('title')
    HuanDv | Home
@endsection

@section('part1')
    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg"
                        data-setbg="https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/116914407_10152197240839953_1026943340989780301_o.jpg?_nc_cat=109&_nc_sid=730e14&_nc_ohc=vuvpY6FYfKcAX_O9uK-&_nc_ht=scontent.fhan3-1.fna&oh=9b048a9e8cfff46332adfbf6e9625f49&oe=5F6A83CE">
                        <div class="categories__text">
                            <h1 style="color: rgb(213, 44, 129)">Real Madrid</h1>
                            <p>Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt labore
                                edolore magna aliquapendisse ultrices gravida.</p>
                            <a href="{{route('shop')}}">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg"
                                data-setbg="https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/118313263_10158356904897713_1168149100323477622_o.jpg?_nc_cat=110&_nc_sid=730e14&_nc_ohc=KCkfpZXzjOUAX_gdfq8&_nc_ht=scontent.fhan3-1.fna&oh=9388ac039c5d4d968e5167703fa36350&oe=5F678B23">
                                <div class="categories__text">
                                    <h4>Arsenal</h4>
                                    <p>358 items</p>
                                    <a href="{{route('shop')}}">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg"
                                data-setbg="https://scontent.fhan4-1.fna.fbcdn.net/v/t1.0-9/80832177_3105824582780403_3267060525464289280_o.jpg?_nc_cat=104&_nc_sid=730e14&_nc_ohc=XdJqv6mzg2YAX8YbMEV&_nc_ht=scontent.fhan4-1.fna&oh=b9d0df27ac249103b94be97881cee869&oe=5F683D2F">
                                <div class="categories__text">
                                    <h4>Paris Saint Germain</h4>
                                    <p style="color:rgb(71, 51, 51)">273 items</p>
                                    <a href="{{route('shop')}}">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg"
                                data-setbg="https://media.thethao247.vn/origin_414x0/upload/thanhtung/2020/08/04/ao-dau-san-nha-20-21-manchester-united-3.jpg">
                                <div class="categories__text">
                                    <h4 style="color: antiquewhite">Manchester United</h4>
                                    <p>159 items</p>
                                    <a style="color: antiquewhite" href="{{route('shop')}}">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg"
                                data-setbg="https://aobongda24h.com/pic/news/images/636730826933585147.jpg">
                                <div class="categories__text">
                                    <h4>Spain</h4>
                                    <p>792 items</p>
                                    <a href="{{route('shop')}}">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('part2')
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>New product</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".real">Real Madrid</li>
                        <li data-filter=".shoes">Soccer shoes</li>
                        <li data-filter=".belgium">Belgium</li>
                        <li data-filter=".mancity">Manchester City</li>
                        <li data-filter=".ball">Ball</li>
                    </ul>
                </div>
            </div>
            @php
            $ran = null;
            @endphp
            <div class="row property__gallery">

                {{-- real --}}
                @foreach ($real as $item)
                    @php
                    $ran = rand(1,9);
                    @endphp
                    <div class="col-lg-3 col-md-4 col-sm-6 mix real">
                        @if (isset($item->sale))
                            <div class="product__item sale">
                            @else
                                <div class="product__item">
                        @endif
                        <div class="product__item__pic set-bg" data-setbg="{{ $item->image }}">
                            @if (isset($item->sale))
                                <div class="label sale">Sale</div>
                            @else
                                @if ($ran == 8)
                                    <div class="label new">New</div>
                                @endif
                            @endif
                            <ul class="product__hover">
                                <li><a href="{{ $item->image }}" class="image-popup"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">{{ $item->name_product }}</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            @if (isset($item->sale))
                                <div class="product__price">
                                    @php
                                    $price_sale= $item->price -($item->price * ( $item->sale /100));
                                    echo number_format($price_sale);
                                    @endphp
                                    <span>{{ number_format($item->price) }}</span>
                                </div>
                            @else
                                <div class="product__price">{{ number_format($item->price) }}</div>
                            @endif
                        </div>
                    </div>
            </div>
            @endforeach

            {{-- giay --}}
            @foreach ($shoes as $item)
                @php
                $ran = rand(1,9);
                @endphp
                <div class="col-lg-3 col-md-4 col-sm-6 mix shoes">
                    @if (isset($item->sale))
                        <div class="product__item sale">
                        @else
                            <div class="product__item">
                    @endif
                    <div class="product__item__pic set-bg" data-setbg="{{ $item->image }}">
                        @if (isset($item->sale))
                            <div class="label sale">Sale</div>
                        @else
                            @if ($ran == 8)
                                <div class="label new">New</div>
                            @endif
                        @endif
                        <ul class="product__hover">
                            <li><a href="{{ $item->image }}" class="image-popup"><i class="fa fa-retweet"></i></a>
                            </li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">{{ $item->name_product }}</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        @if (isset($item->sale))
                            <div class="product__price">
                                @php
                                $price_sale= $item->price -($item->price * ( $item->sale /100));
                                echo number_format($price_sale);
                                @endphp
                                <span>{{ number_format($item->price) }}</span>
                            </div>
                        @else
                            <div class="product__price">{{ number_format($item->price) }}</div>
                        @endif
                    </div>
                </div>
        </div>
        @endforeach

        {{-- bi --}}
        @foreach ($belgium as $item)
            @php
            $ran = rand(1,9);
            @endphp
            <div class="col-lg-3 col-md-4 col-sm-6 mix belgium">
                @if (isset($item->sale))
                    <div class="product__item sale">
                    @else
                        <div class="product__item">
                @endif
                <div class="product__item__pic set-bg" data-setbg="{{ $item->image }}">
                    @if (isset($item->sale))
                        <div class="label sale">Sale</div>
                    @else
                        @if ($ran == 8)
                            <div class="label new">New</div>
                        @endif
                    @endif
                    <ul class="product__hover">
                        <li><a href="{{ $item->image }}" class="image-popup"><i class="fa fa-retweet"></i></a>
                        </li>
                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                        <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><a href="#">{{ $item->name_product }}</a></h6>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    @if (isset($item->sale))
                        <div class="product__price">
                            @php
                            $price_sale= $item->price -($item->price * ( $item->sale /100));
                            echo number_format($price_sale);
                            @endphp
                            <span>{{ number_format($item->price) }}</span>
                        </div>
                    @else
                        <div class="product__price">{{ number_format($item->price) }}</div>
                    @endif
                </div>
            </div>
            </div>
        @endforeach

        {{-- mancity --}}
        @foreach ($mancity as $item)
            @php
            $ran = rand(1,9);
            @endphp
            <div class="col-lg-3 col-md-4 col-sm-6 mix mancity">
                @if (isset($item->sale))
                    <div class="product__item sale">
                    @else
                        <div class="product__item">
                @endif
                <div class="product__item__pic set-bg" data-setbg="{{ $item->image }}">
                    @if (isset($item->sale))
                        <div class="label sale">Sale</div>
                    @else
                        @if ($ran == 8)
                            <div class="label new">New</div>
                        @endif
                    @endif
                    <ul class="product__hover">
                        <li><a href="{{ $item->image }}" class="image-popup"><i class="fa fa-retweet"></i></a>
                        </li>
                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                        <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><a href="#">{{ $item->name_product }}</a></h6>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    @if (isset($item->sale))
                        <div class="product__price">
                            @php
                            $price_sale= $item->price -($item->price * ( $item->sale /100));
                            echo number_format($price_sale);
                            @endphp
                            <span>{{ number_format($item->price) }}</span>
                        </div>
                    @else
                        <div class="product__price">{{ number_format($item->price) }}</div>
                    @endif
                </div>
            </div>
            </div>
        @endforeach
        {{-- bong --}}
        @foreach ($ball as $item)
            @php
            $ran = rand(1,9);
            @endphp
            <div class="col-lg-3 col-md-4 col-sm-6 mix ball">
                @if (isset($item->sale))
                    <div class="product__item sale">
                    @else
                        <div class="product__item">
                @endif
                <div class="product__item__pic set-bg" data-setbg="{{ $item->image }}">
                    @if (isset($item->sale))
                        <div class="label sale">Sale</div>
                    @else
                        @if ($ran == 8)
                            <div class="label new">New</div>
                        @endif
                    @endif
                    <ul class="product__hover">
                        <li><a href="{{ $item->image }}" class="image-popup"><i class="fa fa-retweet"></i></a>
                        </li>
                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                        <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><a href="#">{{ $item->name_product }}</a></h6>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    @if (isset($item->sale))
                        <div class="product__price">
                            @php
                            $price_sale= $item->price -($item->price * ( $item->sale /100));
                            echo number_format($price_sale);
                            @endphp
                            <span>{{ number_format($item->price) }}</span>
                        </div>
                    @else
                        <div class="product__price">{{ number_format($item->price) }}</div>
                    @endif
                </div>
            </div>
            </div>
        @endforeach

        </div>
        </div>
    </section>
@endsection

@section('part3')
    <section class="banner set-bg" data-setbg="{{ asset('shop/img/banner-1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 m-auto">
                    <div class="banner__slider owl-carousel">
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>The Chloe Collection</span>
                                <h1>The Project Jacket</h1>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>The Chloe Collection</span>
                                <h1>The Project Jacket</h1>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>The Chloe Collection</span>
                                <h1>The Project Jacket</h1>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('part4')
    <section class="trend spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Latest product</h4>
                        </div>
                        @foreach ($latest_product as $item)
                            <div class="trend__item">
                                <div class="trend__item__pic">
                                    <img style="width:90px;height:90px" src="{{ $item->image }}" alt="">
                                </div>
                                <div class="trend__item__text">
                                    <h6>{{ $item->name_product }}</h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">đ {{ number_format($item->price) }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Rated product</h4>
                        </div>
                        @foreach ($rated_product as $item)
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img style="width:90px;height:90px" src="{{ $item->image }}" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>{{ $item->name_product }}</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">đ {{ number_format($item->price) }}</div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Sold product</h4>
                        </div>
                        @foreach ($sold_product as $item)
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img style="width:90px;height:90px" src="{{ $item->image }}" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>{{ $item->name_product }}</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">đ {{ number_format($item->price) }}</div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('part5')
    <section class="discount">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="discount__pic">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Argentine_-_Portugal_-_Cristiano_Ronaldo.jpg/600px-Argentine_-_Portugal_-_Cristiano_Ronaldo.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="discount__text">
                        <div class="discount__text__title">
                            <span>Discount</span>
                            <h2>Summer 2019</h2>
                            <h5><span>Sale</span> 50%</h5>
                        </div>
                        <div class="discount__countdown" id="countdown-time">
                            <div class="countdown__item">
                                <span>22</span>
                                <p>Days</p>
                            </div>
                            <div class="countdown__item">
                                <span>18</span>
                                <p>Hour</p>
                            </div>
                            <div class="countdown__item">
                                <span>46</span>
                                <p>Min</p>
                            </div>
                            <div class="countdown__item">
                                <span>05</span>
                                <p>Sec</p>
                            </div>
                        </div>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('part6')
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="services__item">
                        <i class="fa fa-car"></i>
                        <h6>Free Shipping</h6>
                        <p>For all oder over $99</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="services__item">
                        <i class="fa fa-money"></i>
                        <h6>Money Back Guarantee</h6>
                        <p>If good have Problems</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="services__item">
                        <i class="fa fa-support"></i>
                        <h6>Online Support 24/7</h6>
                        <p>Dedicated support</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="services__item">
                        <i class="fa fa-headphones"></i>
                        <h6>Payment Secure</h6>
                        <p>100% secure payment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

