@extends('super-market.layouts.master')


@section('title')
    Supermarket | Contact
@endsection

@section('hero')
    @include('super-market.partial.hero')

@endsection

@section('categories')
    <section class="breadcrumb-section set-bg" data-setbg="http://127.0.0.1:8000/super-market/img/breadcrumb.jpg"
        style="background-image: url('http://127.0.0.1:8000/super-market/img/breadcrumb.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('index') }}">Home</a>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('latest')
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i style="font-size: -webkit-xxx-large;" class="fas fa-phone"></i>
                        <h4>Phone</h4>
                        <p>+84 456.789.999</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i style="font-size: -webkit-xxx-large;" class="fas fa-map-pin"></i>
                        <h4>Address</h4>
                        <p>8 Ton Thuat Thuyet, My Dinh 2, Tu Liem, Ha Noi.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i style="font-size: -webkit-xxx-large;" class="far fa-clock"></i>
                        <h4>Open time</h4>
                        <p>08:00 am to 23:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i style="font-size: -webkit-xxx-large;" class="far fa-envelope"></i>
                        <h4>Email</h4>
                        <p>Supermarket@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('map')
    <div class="map">
        <iframe
            src="https://www.google.com/maps/place/8+T%C3%B4n+Th%E1%BA%A5t+Thuy%E1%BA%BFt,+M%E1%BB%B9+%C4%90%C3%ACnh,+T%E1%BB%AB+Li%C3%AAm,+H%C3%A0+N%E1%BB%99i+10000,+Vi%E1%BB%87t+Nam/@21.0288722,105.7795577,17z/data=!3m1!4b1!4m5!3m4!1s0x313454b3260b1a8b:0x862052392e3f478e!8m2!3d21.0288722!4d105.7817464"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>Hà Nội</h4>
                <ul>
                    <li>Phone: +12-345-6789</li>
                    <li>Add: 8 Tôn Thất Thuyết,Mỹ Đình 2, Hà Nội</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('contact_form')
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Leave Message</h2>
                    </div>
                </div>
            </div>
            <form action="{{ route('recieve_content') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Your name" required value="{{ $name_userlogin->name }}" readonly>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Your Email" required value="{{ $name_userlogin->email }}" readonly>
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Your message" required name="content_contact"></textarea>
                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
