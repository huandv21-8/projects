<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>HuanDv | Home</title>
<!-- load Dojo -->
<jsp:include page="partial/linkCSS.jsp"></jsp:include>

</head>
<body>
	<!-- Page Preloder -->
	<!--  <div id="preloder">
		<div class="loader"></div>
	</div>-->

	<!-- Offcanvas Menu Begin -->
<!--  	<div class="offcanvas-menu-overlay"></div>
	<div class="offcanvas-menu-wrapper">
		<div class="offcanvas__close">+</div>
		<ul class="offcanvas__widget">
			<li><span class="icon_search search-switch"></span></li>
			<li><a href="#"><span class="icon_heart_alt"></span>
					<div class="tip">2</div> </a></li>
			<li><a href="#"><span class="icon_bag_alt"></span>
					<div class="tip">2</div> </a></li>
		</ul>
		<div class="offcanvas__logo">
			<a href="./index.html"><img src="img/logo.png" alt=""></a>
		</div>
		<div id="mobile-menu-wrap"></div>
		<div class="offcanvas__auth">
			<a href="#">Login</a> <a href="#">Register</a>
		</div>
	</div>-->
	<!-- Offcanvas Menu End -->

	<!-- Header Section Begin -->
	<jsp:include page="partial/header.jsp"></jsp:include>
	<!-- Header Section End -->

	<!-- Categories Section Begin -->
	<section class="categories">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 p-0">
				<div class="categories__item categories__large__item set-bg"
					data-setbg="https://cdn.shopify.com/s/files/1/0370/0290/3688/files/RM_website_pod_0720_home_1280x.jpg?v=1596145333">
					<div class="categories__text">
						<h1 style="color: rgb(213, 44, 129)">Real Madrid</h1>
						<p>Sitamet, consectetur adipiscing elit, sed do eiusmod tempor
							incidid-unt labore edolore magna aliquapendisse ultrices gravida.</p>
						<a href="{{route('shop')}}">Shop now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="row">
					<c:forEach items="${list_category}" var="item">
						<!-- đây là bảng category -->
						<div class="col-lg-6 col-md-6 col-sm-6 p-0">
							<div class="categories__item set-bg"
								data-setbg="${item.getImage_category() }">
								<div class="categories__text">
									<h4>${item.name_category }</h4>
									<c:forEach items="${list_number_product }" var="number">
										<c:if test="${number.key == item.id_category}">
											<p>
												<c:out value="${number.value}" />
												items
											</p>
										</c:if>
									</c:forEach>
									<a href="#">Shop now</a>
								</div>
							</div>
						</div>
					</c:forEach>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- Categories Section End -->

	<!-- Product Section Begin -->
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
					<c:forEach items="${list_topic }" var="item">
						<li data-filter=".a${item.id_topic }">${item.name_topic }</li>
					</c:forEach>
				
				</ul>
			</div>
		</div>
		<div class="row property__gallery">
		  	<c:forEach items="${list_product }" var="item">
		  
				<div id="product" data-id="${item.getTopic().id_topic }" class="col-lg-3 col-md-4 col-sm-6 mix a${item.getTopic().id_topic }">
					<div class="product__item">
						<div class="product__item__pic set-bg"
							data-setbg="${item.image }">
							<div class="label new">New</div>
							<ul class="product__hover">
								 <li><a href="${item.image }" class="image-popup"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
							</ul>
						</div>
						<div class="product__item__text">
							<h6>
								<a href="#">${item.name_product }</a>
							</h6>
							<div class="rating">
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i>
							</div>
							<div class="product__price"> ${item.price }</div>
						</div>
					</div>
				</div>
			</c:forEach>
			
			<div class="col-lg-3 col-md-4 col-sm-6 mix a1">
				<div class="product__item">
					<div class="product__item__pic set-bg"
						data-setbg="img/product/product-2.jpg">
						<ul class="product__hover">
							 <li><a href="${item.image }" class="image-popup"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
						</ul>
					</div>
					<div class="product__item__text">
						<h6>
							<a href="#">Flowy striped skirt</a>
						</h6>
						<div class="rating">
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i>
						</div>
						<div class="product__price">$ 49.0</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 mix accessories">
				<div class="product__item">
					<div class="product__item__pic set-bg"
						data-setbg="img/product/product-3.jpg">
						<div class="label stockout">out of stock</div>
						<ul class="product__hover">
							<li><a href="img/product/product-3.jpg" class="image-popup"><span
									class="arrow_expand"></span></a></li>
							<li><a href="#"><span class="icon_heart_alt"></span></a></li>
							<li><a href="#"><span class="icon_bag_alt"></span></a></li>
						</ul>
					</div>
					<div class="product__item__text">
						<h6>
							<a href="#">Cotton T-Shirt</a>
						</h6>
						<div class="rating">
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i>
						</div>
						<div class="product__price">$ 59.0</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 mix cosmetic">
				<div class="product__item">
					<div class="product__item__pic set-bg"
						data-setbg="img/product/product-4.jpg">
						<ul class="product__hover">
							<li><a href="img/product/product-4.jpg" class="image-popup"><span
									class="arrow_expand"></span></a></li>
							<li><a href="#"><span class="icon_heart_alt"></span></a></li>
							<li><a href="#"><span class="icon_bag_alt"></span></a></li>
						</ul>
					</div>
					<div class="product__item__text">
						<h6>
							<a href="#">Slim striped pocket shirt</a>
						</h6>
						<div class="rating">
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i>
						</div>
						<div class="product__price">$ 59.0</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 mix kid">
				<div class="product__item">
					<div class="product__item__pic set-bg"
						data-setbg="img/product/product-5.jpg">
						<ul class="product__hover">
							<li><a href="img/product/product-5.jpg" class="image-popup"><span
									class="arrow_expand"></span></a></li>
							<li><a href="#"><span class="icon_heart_alt"></span></a></li>
							<li><a href="#"><span class="icon_bag_alt"></span></a></li>
						</ul>
					</div>
					<div class="product__item__text">
						<h6>
							<a href="#">Fit micro corduroy shirt</a>
						</h6>
						<div class="rating">
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i>
						</div>
						<div class="product__price">$ 59.0</div>
					</div>
				</div>
			</div>
			<div
				class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
				<div class="product__item sale">
					<div class="product__item__pic set-bg"
						data-setbg="img/product/product-6.jpg">
						<div class="label sale">Sale</div>
						<ul class="product__hover">
							<li><a href="img/product/product-6.jpg" class="image-popup"><span
									class="arrow_expand"></span></a></li>
							<li><a href="#"><span class="icon_heart_alt"></span></a></li>
							<li><a href="#"><span class="icon_bag_alt"></span></a></li>
						</ul>
					</div>
					<div class="product__item__text">
						<h6>
							<a href="#">Tropical Kimono</a>
						</h6>
						<div class="rating">
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i>
						</div>
						<div class="product__price">
							$ 49.0 <span>$ 59.0</span>
						</div>
					</div>
				</div>
			</div>
			<div
				class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
				<div class="product__item">
					<div class="product__item__pic set-bg"
						data-setbg="img/product/product-7.jpg">
						<ul class="product__hover">
							<li><a href="img/product/product-7.jpg" class="image-popup"><span
									class="arrow_expand"></span></a></li>
							<li><a href="#"><span class="icon_heart_alt"></span></a></li>
							<li><a href="#"><span class="icon_bag_alt"></span></a></li>
						</ul>
					</div>
					<div class="product__item__text">
						<h6>
							<a href="#">Contrasting sunglasses</a>
						</h6>
						<div class="rating">
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i>
						</div>
						<div class="product__price">$ 59.0</div>
					</div>
				</div>
			</div>
			<div
				class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
				<div class="product__item sale">
					<div class="product__item__pic set-bg"
						data-setbg="img/product/product-8.jpg">
						<div class="label">Sale</div>
						<ul class="product__hover">
							<li><a href="img/product/product-8.jpg" class="image-popup"><span
									class="arrow_expand"></span></a></li>
							<li><a href="#"><span class="icon_heart_alt"></span></a></li>
							<li><a href="#"><span class="icon_bag_alt"></span></a></li>
						</ul>
					</div>
					<div class="product__item__text">
						<h6>
							<a href="#">Water resistant backpack</a>
						</h6>
						<div class="rating">
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i> <i class="fa fa-star"></i> <i
								class="fa fa-star"></i>
						</div>
						<div class="product__price">
							$ 49.0 <span>$ 59.0</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- Product Section End -->

	<!-- Banner Section Begin -->
	<section class="banner set-bg" data-setbg="img/banner/banner-1.jpg">
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
	<!-- Banner Section End -->

	<!-- Trend Section Begin -->
	<section class="trend spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="trend__content">
					<div class="section-title">
						<h4>Hot Trend</h4>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/ht-1.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Chain bucket bag</h6>
							<div class="rating">
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/ht-2.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Pendant earrings</h6>
							<div class="rating">
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/ht-3.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Cotton T-Shirt</h6>
							<div class="rating">
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="trend__content">
					<div class="section-title">
						<h4>Best seller</h4>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/bs-1.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Cotton T-Shirt</h6>
							<div class="rating">
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/bs-2.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>
								Zip-pockets pebbled tote <br />briefcase
							</h6>
							<div class="rating">
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/bs-3.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Round leather bag</h6>
							<div class="rating">
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="trend__content">
					<div class="section-title">
						<h4>Feature</h4>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/f-1.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Bow wrap skirt</h6>
							<div class="rating">
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/f-2.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Metallic earrings</h6>
							<div class="rating">
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
					<div class="trend__item">
						<div class="trend__item__pic">
							<img src="img/trend/f-3.jpg" alt="">
						</div>
						<div class="trend__item__text">
							<h6>Flap cross-body bag</h6>
							<div class="rating">
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i>
							</div>
							<div class="product__price">$ 59.0</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- Trend Section End -->

	<!-- Discount Section Begin -->
	<section class="discount">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 p-0">
				<div class="discount__pic">
					<img src="img/discount.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-6 p-0">
				<div class="discount__text">
					<div class="discount__text__title">
						<span>Discount</span>
						<h2>Summer 2019</h2>
						<h5>
							<span>Sale</span> 50%
						</h5>
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
	<!-- Discount Section End -->

	<!-- Services Section Begin -->
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
	<!-- Services Section End -->

	<!-- Instagram Begin -->
	<jsp:include page="partial/instagram.jsp"></jsp:include>
	<!-- Instagram End -->

	<!-- Footer Section Begin -->
	<jsp:include page="partial/footer.jsp"></jsp:include>
	<!-- Footer Section End -->

	<!-- Search Begin -->
	<jsp:include page="partial/search.jsp"></jsp:include>
	<!-- Search End -->

	<!-- Js Plugins -->
	<jsp:include page="partial/linkJS.jsp"></jsp:include>
</body>
</html>