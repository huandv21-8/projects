@extends('super-market.layouts.master')
@section('title')
   Supermarket | Check Out
@endsection
@section('testcart')
    showCart()
@endsection
@section('hero')
    @include('super-market.partial.hero')
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('super-market/img/breadcrumb.jpg') }}"
        style="background-image: url('{{ asset('super-market/img/breadcrumb.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Check Out</h2>
                        <div class="breadcrumb__option">
                        <a href="{{route('index')}}">Home</a>
                            <span>Check Out Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('checkout')
<section class="checkout spad">
    <div class="container">
        <!-- <div class="row">
            <div class="col-lg-12">
                <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                </h6>
            </div>
        </div> -->
        <div class="checkout__form">
            <h4>Billing Details</h4>
            <form action="#">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Full Name<span>*</span></p>
                                    <input type="text" style="color: #f90a0a;"
                                    value="{{$name_userlogin->name}}" name="fullname" required pattern="[a-z0-9]{3,15}">
                                </div>
                            </div>
                        
                        </div>
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input type="text" style="color: #f90a0a;" id="Address" name="address"required pattern="^\d+\s[A-z]+\s[A-z]+">
                            
                        </div>
                        
                        <div class="checkout__input">
                            <p>District<span>*</span></p>
                            <input type="text" style="color: #f90a0a;" id="District" name="District" required pattern="[A-z]+\s[A-z]+">
                           
                        </div>
                        <div class="checkout__input" style="color: #f90a0a;">
                            <p>City<span>*</span></p>
                            <input type="text" id="City" name="City" required pattern="[A-z]+\s[A-z]+">
                        </div>
                       
                        <div class="row">
                            <!-- <div class="col-lg-6">
                                <div class="checkout__input" >
                                    <p>Phone<span>*</span></p>
                                    <input type="text" style="color: #f90a0a;" name="phone" required pattern="[0-9]{9,10}">
                                    
                                </div>
                            </div> -->
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="email" style="color: #f90a0a;" value="{{$name_userlogin->email}}" id='email' name='email' required>
                                </div>
                            </div>
                        
                        </div>
                    
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Your Order</h4>
                            <div class="checkout__order__products">Products <span>Total</span></div>
                            <ul id="cartList">
                                
                            </ul>
                            <div class="checkout__order__subtotal">Subtotal <span id="Subtotal">$0</span></div>
                            <div class="checkout__order__total">Total <span id="order__total">$0</span></div>
<!--                             
                            <button type="submit" class="site-btn">PLACE ORDER</button> -->
                        </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="checkout-payment">
                            <ul class="payment-method" style="
    text-align: left;
    margin: 0;
    list-style: none;
">
                                <h3>Phương Thức Thanh Toán</h3>
                                <li>
                                    <input type="radio" value="vnpay" name="payment" style="
    margin: 0 1em 0 0;
">
                                    <span>
                                        <img src="https://1office.vn/wp-content/uploads/2020/02/1564381662138-unnamed-1.jpg" style="
    max-height: 52px;
    vertical-align: middle;
    margin: -2px 0 0 .5em;
    padding: 0;
    position: relative;
    box-shadow: none;
">
                                    </span>
                                    <div class="payment-box" style="
    position: relative;
    box-sizing: border-box;
    width: 100%;
    padding: 1em;
    margin: 1em 0;
    font-size: .92em;
    border-radius: 2px;
    line-height: 1.5;
    background-color: #f1eeea;
    color: #515151;
">
                                        <p style="
    margin-bottom: 0;
">Cổng thanh toán VNPAY.</p>
                                    </div>
                                    <input type="radio" value="tructiep" name="payment" style="
    margin: 0 1em 0 0;
">
                                    <span>
                                        <i class="fas fa-apple-pay" aria-hidden="true">Thanh Toán Trực Tiếp</i>
                                    </span>
                                    <div class="payment-box" style="
    position: relative;
    box-sizing: border-box;
    width: 100%;
    padding: 1em;
    margin: 1em 0;
    font-size: .92em;
    border-radius: 2px;
    line-height: 1.5;
    background-color: #f1eeea;
    color: #515151;
">
                                        <p>Thanh Toán Trực Tiếp</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="text-right text-center-sm">
                                <button type="submit" class="organik-btn" style="
    text-align: center;
    text-transform: uppercase;
    letter-spacing: .05em;
    font-size: 16px;
    font-weight: bold;
    padding: 14px 25px;
    border-radius: 3px;
    border: 2px solid #7fad39;
    background-color: #7fad39;
    color: #fff;
    display: inline-block;
    line-height: 1;
    transition: all .5s;
" onclick="gotoPayment({{ $name_userlogin->id }})">Thanh Toán Ngay</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('script')

<script type="text/javascript">
        var cartList = [];
        var total = 0;
        var json = localStorage.getItem('cart')
        if (json != null && json != '') {
            cartList = JSON.parse(json)
            showCart();
        }

        function showCart() {
            total = 0;
            $('#cart_home').empty()
            for (var i = 0; i < cartList.length; i++) {
                var current_total = cartList[i].price * cartList[i].num

                total += cartList[i].price * cartList[i].num
                $('#cartList').append(`  <li>${cartList[i].title} * $${cartList[i].price}
                    <span>${current_total}</span></li>`)

                // total += cartList[i].price * cartList[i].num
            }
            $('#Subtotal').text('$' + total)
            $('#order__total').text('$' + total)

        }
        function gotoPayment(id){
            District = $('#District').val()
            Address=$('#Address').val()
            City= $('#City').val()
           

            $.post('{{ route('payment') }}', {
			'_token': '{{ csrf_token() }}',
			'data': JSON.stringify(cartList),
			'id_customer': id,
            'Address': Address,
            'District': District,
            'City': City,
            'total': total
		}, function(data) {
            alert(data)
			localStorage.removeItem('cart')
			// location.reload()
            window.location="{{route('index')}}";
		})
           
           
        }

    </script>
@endsection
