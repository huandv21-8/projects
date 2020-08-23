@extends('super-market.layouts.master')
@section('title')
    Supermarket | Shop cart
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
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shopping cart hiển thị giỏ hàng đã chọn -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="cartList">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                    <a href="{{route('shopGrid')}}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                       
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span id="Subtotal">$0</span></li>
                            <li>Total <span id="total2">$0</span></li>
                        </ul>
                    <a href="{{route('layout-checkout')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
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
                                            <input type="text" value="${cartList[i].num}" id="quantity" name="quantity" readonly>
                                            <button class="hjhj" onclick="plusQuantity(${cartList[i].id})" style=" background-color: whitesmoke;border: none;">+</button></div>
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
// <input type="number" value="${cartList[i].num}" min="1" max="5" readonly >
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

                // alert(id)
                $.get('{{ route('shoppingCart') }}', {
                '_token': '{{ csrf_token() }}',
                'id':id
                
            }, function(data) {
                        for (var i = 0; i < cartList.length; i++) {
                    if (cartList[i].id == id && cartList[i].num < data ) {
                        cartList[i].num++
                        break
                    }
                }
                localStorage.setItem('cart', JSON.stringify(cartList))
                showCart()
                showCart1()
            })
        }
            
	    
  

    </script>
@endsection
