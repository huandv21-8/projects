<section class="hero  hero-normal">
    @php
    $categoryList = DB::table('category')->get();
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All departments</span>
                    </div>
                    <ul style="display:none;">
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
                    <div class="hero__search__form form-group">
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
                    <div id="countryList">
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

            </div>
          
        </div>
     
    </div>
</section>
