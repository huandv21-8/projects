<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>

<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>HuanDv | Detail</title>
<!-- load Dojo -->
<jsp:include page="partial/linkCSS.jsp"></jsp:include>
<style type="text/css">
img {
	vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
	position: relative;
}

/* Hide the images by default */
.mySlides {
	display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
	cursor: pointer;
}

/* Next & previous buttons */
.prev, .next {
	cursor: pointer;
	position: absolute;
	top: 40%;
	width: auto;
	padding: 16px;
	margin-top: 0px;
	margin-right: 15px;
	color: white;
	font-weight: bold;
	font-size: 20px;
	border-radius: 0 3px 3px 0;
	user-select: none;
	-webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
	right: 0;
	border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
	background-color: #CEF6CE;
}

/* Number text (1/3 etc) */
.numbertext {
	color: #f2f2f2;
	font-size: 12px;
	padding: 8px 12px;
	position: absolute;
	top: 0;
}

/* Container for image text */
.caption-container {
	text-align: center;
	background-color: #222;
	padding: 2px 16px;
	color: white;
}

.a1:after {
	content: "";
	display: table;
	clear: both;
}

/* Six columns side by side */
.column {
	float: left;
	width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
	opacity: 0.6;
}

.active, .demo:hover {
	opacity: 1;
}
</style>

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

	<!-- Breadcrumb Begin -->
	<div class="breadcrumb-option">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb__links">
						<a href="./index.html"><i class="fa fa-home"></i> Home</a> <a
							href="#">Detail </a> <span>${productDetail.name_product }</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb End -->

	<!-- Product Details Section Begin -->
	<section class="product-details spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="container">
					<div class="mySlides">
						<img src="${productDetail.image }"
							style="width: 100%; heihgt: 100%">
					</div>
					<c:forEach items="${productDetail.getImages() }" var="item">
						<div class="mySlides">
							<img src="${item.link_image }" style="width: 100%; heihgt: 100%">
						</div>
					</c:forEach>
					<a class="prev" onclick="plusSlides(-1)">❮</a> <a class="next"
						onclick="plusSlides(1)">❯</a>
					<div class="row a1">
						<%
							int id = 1;
						%>
						<c:forEach items="${productDetail.getImages() }" var="item">

							<div class="column">
								<img class="demo cursor" src="${item.link_image }"
									style="width: 100%; height: 100%"
									onclick="currentSlide(${id +=1})" alt="${item.id_image }">
							</div>
						</c:forEach>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="product__details__text">
					<h3>${productDetail.name_product }<span>Brand:
							SKMEIMore Men Watches from SKMEI</span>
					</h3>
					<div class="rating">
						<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
							class="fa fa-star"></i> <i class="fa fa-star"></i> <i
							class="fa fa-star"></i> <span>( 138 reviews )</span>
					</div>

					<c:choose>
						<c:when test="${productDetail.getSale() != null}">
							<div class="product__details__price">
								<fmt:formatNumber
									value="${ productDetail.price-(productDetail.price/100*productDetail.sale) }"
									minFractionDigits="0" />
								vnđ <span><fmt:formatNumber
										value="${productDetail.price}" minFractionDigits="0" /> vnđ</span>
							</div>
						</c:when>
						<c:otherwise>

						</c:otherwise>
					</c:choose>


					<p>Nemo enim ipsam voluptatem quia aspernatur aut odit aut
						loret fugit, sed quia consequuntur magni lores eos qui ratione
						voluptatem sequi nesciunt.</p>
					<div class="product__details__button">
						<div class="quantity">
							<span>Quantity:</span>
							<div class="pro-qty">
								<input type="text" value="1">
							</div>
						</div>
						<a href="#" class="cart-btn"><span class="icon_bag_alt"></span>
							Add to cart</a>
						<ul>
							<li><a href="#"><span class="icon_heart_alt"></span></a></li>
							<li><a href="#"><span class="icon_adjust-horiz"></span></a></li>
						</ul>
					</div>
					<div class="product__details__widget">
						<ul>
							<li><span>Availability:</span>
								<div class="stock__checkbox">
									<label for="stockin"> In Stock <input type="checkbox"
										id="stockin"> <span class="checkmark"></span>
									</label>
								</div></li>
							<li><span>Available color:</span>
								<div class="color__checkbox">
									<label for="red"> <input type="radio"
										name="color__radio" id="red" checked> <span
										class="checkmark"></span>
									</label> <label for="black"> <input type="radio"
										name="color__radio" id="black"> <span
										class="checkmark black-bg"></span>
									</label> <label for="grey"> <input type="radio"
										name="color__radio" id="grey"> <span
										class="checkmark grey-bg"></span>
									</label>
								</div></li>
							<li><span>Available size:</span>
								<div class="size__btn">
									<c:forEach items="${sizes }" var="item">
										<label for="${item.size_number }-btn"> <input
											type="radio" id="${item.size_number }-btn">
											${item.size_number }
										</label>
									</c:forEach>

								</div></li>
							<li><span>Promotions:</span>
								<p>Free shipping</p></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="product__details__tab">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item"><a class="nav-link active"
							data-toggle="tab" href="#tabs-1" role="tab">Description</a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab"
							href="#tabs-2" role="tab">Specification</a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab"
							href="#tabs-3" role="tab">Reviews ( 2 )</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tabs-1" role="tabpanel">
							<h6>Description</h6>
							<p>${productDetail.description }</p>
						</div>
						<div class="tab-pane" id="tabs-2" role="tabpanel">
							<h6>Specification</h6>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur
								aut odit aut loret fugit, sed quia consequuntur magni dolores
								eos qui ratione voluptatem sequi nesciunt loret. Neque porro
								lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim
								ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret
								fugit, sed quia ipsu consequuntur magni dolores eos qui ratione
								voluptatem sequi nesciunt. Nulla consequat massa quis enim.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
								Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
								natoque penatibus et magnis dis parturient montes, nascetur
								ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
								pretium quis, sem.</p>
						</div>
						<div class="tab-pane" id="tabs-3" role="tabpanel">
							<h6>Reviews ( 2 )</h6>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur
								aut odit aut loret fugit, sed quia consequuntur magni dolores
								eos qui ratione voluptatem sequi nesciunt loret. Neque porro
								lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim
								ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret
								fugit, sed quia ipsu consequuntur magni dolores eos qui ratione
								voluptatem sequi nesciunt. Nulla consequat massa quis enim.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
								Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
								natoque penatibus et magnis dis parturient montes, nascetur
								ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
								pretium quis, sem.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="related__title">
					<h5>RELATED PRODUCTS</h5>
				</div>
			</div>
			<c:forEach items="${related }" var="item">
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="product__item">
						<div class="product__item__pic set-bg" data-setbg="${item.image }">

							<c:choose>
								<c:when test="${item.sale != null}">
									<div class="label sale">Sale</div>
								</c:when>
								<c:otherwise>
									<div class="label new">New</div>
								</c:otherwise>
							</c:choose>

							<ul class="product__hover">
								<li><a href="${item.image }" class="image-popup"><i
										class="fa fa-retweet"></i></a></li>
								<li><a href="#"><i class="far fa-heart"></i></a></li>
								<li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
							</ul>
						</div>
						<div class="product__item__text">
							<h6>
									<a href='<c:url value="/Detail/${item.id_product }" />'>${item.name_product }</a>
							</h6>
							<div class="rating">
								<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i> <i class="fa fa-star"></i> <i
									class="fa fa-star"></i>
							</div>
							<c:choose>
								<c:when test="${item.sale != null }">
									<div class="product__price">
										<fmt:formatNumber
											value="${ item.price-(item.price/100*item.sale) }"
											minFractionDigits="0" />
										vnđ<span> <fmt:formatNumber value="${item.price}"
												minFractionDigits="0" /> vnđ
										</span>
									</div>
								</c:when>
								<c:otherwise>
									<div class="product__price">
										<fmt:formatNumber value="${item.price}" minFractionDigits="0" />
										vnđ
									</div>
								</c:otherwise>
							</c:choose>
						</div>
					</div>
				</div>
			</c:forEach>
		
			
		</div>
	</div>
	</section>
	<!-- Product Details Section End -->


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
	<script src='<c:url value="/resources/js/main.js"/>'></script>

	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("demo");
			var captionText = document.getElementById("caption");
			if (n > slides.length) {
				slideIndex = 1
			}
			if (n < 1) {
				slideIndex = slides.length
			}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " active";
			captionText.innerHTML = dots[slideIndex - 1].alt;
		}
	</script>
</body>
</html>