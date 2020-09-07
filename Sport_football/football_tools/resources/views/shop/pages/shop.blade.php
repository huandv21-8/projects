@extends('shop.layout.master')

@section('title')
    HuanDv | Shop
@endsection

@section('part1')
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('part2')
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    @foreach ($topics as $item)
                                        @php
                                        $stt++;
                                        @endphp
                                        <div class="card">
                                            <div class="card-heading active">
                                                <a data-toggle="collapse" data-target="#collapse{{ $stt }}">
                                                    {{ $item->name_topic }}
                                                </a>
                                            </div>
                                            @php
                                            $category = DB::table('categories')->where('id_topic',$item->id_topic)
                                            ->get();
                                            @endphp
                                            @if ($stt == 2)
                                                <div id="collapse{{ $stt }}" class="collapse show"
                                                    data-parent="#accordionExample">
                                                @else
                                                    <div id="collapse{{ $stt }}" class="collapse"
                                                        data-parent="#accordionExample">
                                            @endif
                                            <div class="card-body">
                                                <ul>
                                                    @foreach ($category as $value)
                                                        <li><a onclick="product({{ $value->id_category }})"
                                                                href="#">{{ $value->name_category }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__filter">
                        <div class="section-title">
                            <h4>Shop by price</h4>
                        </div>
                        <div class="filter-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                             data-min="{{$min_price}}" data-max="{{$max_price}}"></div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <p>Price:</p>
                                    <input type="text" id="minamount" readonly>
                                    <input type="text" id="maxamount" readonly>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="#">Filter</a>
                        </div>
                    </div>
                    <div class="sidebar__sizes">
                        <div class="section-title">
                            <h4>Shop by size</h4>
                        </div>
                        <div class="size__list">
                            <label for="xxs">
                                xxs
                                <input type="checkbox" id="xxs">
                                <span class="checkmark"></span>
                            </label>
                            <label for="xs">
                                xs
                                <input type="checkbox" id="xs">
                                <span class="checkmark"></span>
                            </label>
                            <label for="xss">
                                xs-s
                                <input type="checkbox" id="xss">
                                <span class="checkmark"></span>
                            </label>
                            <label for="s">
                                s
                                <input type="checkbox" id="s">
                                <span class="checkmark"></span>
                            </label>
                            <label for="m">
                                m
                                <input type="checkbox" id="m">
                                <span class="checkmark"></span>
                            </label>
                            <label for="ml">
                                m-l
                                <input type="checkbox" id="ml">
                                <span class="checkmark"></span>
                            </label>
                            <label for="l">
                                l
                                <input type="checkbox" id="l">
                                <span class="checkmark"></span>
                            </label>
                            <label for="xl">
                                xl
                                <input type="checkbox" id="xl">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="sidebar__color">
                        <div class="section-title">
                            <h4>Shop by size</h4>
                        </div>
                        <div class="size__list color__list">
                            <label for="black">
                                Blacks
                                <input type="checkbox" id="black">
                                <span class="checkmark"></span>
                            </label>
                            <label for="whites">
                                Whites
                                <input type="checkbox" id="whites">
                                <span class="checkmark"></span>
                            </label>
                            <label for="reds">
                                Reds
                                <input type="checkbox" id="reds">
                                <span class="checkmark"></span>
                            </label>
                            <label for="greys">
                                Greys
                                <input type="checkbox" id="greys">
                                <span class="checkmark"></span>
                            </label>
                            <label for="blues">
                                Blues
                                <input type="checkbox" id="blues">
                                <span class="checkmark"></span>
                            </label>
                            <label for="beige">
                                Beige Tones
                                <input type="checkbox" id="beige">
                                <span class="checkmark"></span>
                            </label>
                            <label for="greens">
                                Greens
                                <input type="checkbox" id="greens">
                                <span class="checkmark"></span>
                            </label>
                            <label for="yellows">
                                Yellows
                                <input type="checkbox" id="yellows">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row category_List">
                    @php
                    $ran = null;
                    @endphp

                    @if (isset($products))
                        @foreach ($products as $item)
                            @php
                            $ran = rand(1,9);
                            @endphp
                            <div class="col-lg-4 col-md-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ $item->image }}">
                                        @if (isset($item->sale))
                                            <div class="label sale">Sale</div>
                                        @else
                                            @if ($ran == 8)
                                                <div class="label new">New</div>
                                            @endif
                                        @endif
                                        {{-- <div class="label sale">sale</div>
                                        --}}
                                        <ul class="product__hover">
                                            <li><a href="{{ $item->image }}" class="image-popup"><i
                                                        class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="#">{{ $item->name_category }}</a></h6>
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
                                                echo 'đ '.number_format($price_sale);
                                                @endphp
                                                <span>đ {{ number_format($item->price) }}</span>
                                            </div>
                                        @else
                                            <div class="product__price">đ {{ number_format($item->price) }}</div>
                                        @endif
                                        {{-- <div class="product__price">$
                                            {{ number_format($item->price) }}</div> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1>No products</h1>
                    @endif
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection

@section('script')
    <script>
        function product(id_category) {
            $.ajax({
                url: "{{ route('productList') }}",
                method: "POST", // phương thức gửi dữ liệu.
                data: {
                    'id_category': id_category,
                    '_token': '{{ csrf_token() }}',
                },
                // dataType: 'JSON',
                success: function(data) { //dữ liệu nhận về
                    $('.category_List').fadeIn();
                    $('.category_List').html(data);
                    //nhận dữ liệu dạng html và gán vào cặp thẻ có class là category_List
                }
            });

        }

    </script>
@endsection
