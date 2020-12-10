<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<title>HuanDv | Shop</title>
<jsp:include page="partial/linkCSS.jsp"></jsp:include>
<!-- load Dojo -->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Offcanvas Menu Begin -->
	<div class="offcanvas-menu-overlay"></div>
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
	</div>
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
						<a href="./index.html"><i class="fa fa-home"></i> Home</a> <span>Shop</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb End -->

	<!-- Shop Section Begin -->
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
								<c:forEach items="${list_topic }" var="item">
									<div class="card">
										<div class="card-heading active">
											<a data-toggle="collapse"
												data-target="#collapse${item.id_topic }">${item.name_topic }</a>
										</div>

										<c:choose>
											<c:when test="${item.id_topic==1}">
												<div id="collapse${item.id_topic }" class="collapse show"
													data-parent="#accordionExample">
											</c:when>
											<c:otherwise>
												<div id="collapse${item.id_topic }" class="collapse"
													data-parent="#accordionExample">
											</c:otherwise>
										</c:choose>
										<div class="card-body">
											<ul>
												<c:forEach items="${list_category }" var="category">
													<c:if
														test="${category.getTopic().id_topic == item.id_topic }">

														<li><a class="category" style="cursor: pointer;"
															onclick="getProduct(${category.id_category})">${category.name_category }</a>
														</li>
													</c:if>
												</c:forEach>
											</ul>
										</div>
									</div>
							</div>
							</c:forEach>
						</div>
					</div>
				</div>
				<div class="sidebar__filter">
					<div class="section-title">
						<h4>Shop by price</h4>
					</div>
					<div class="filter-range-wrap">
						<div
							class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
							data-min="335" data-max="995"></div>
						<div class="range-slider">
							<div class="price-input">
								<p>Price:</p>
								<input type="text" id="minamount"> <input type="text"
									id="maxamount">
							</div>
						</div>
					</div>
					<a href="#">Filter</a>
				</div>
				<div class="sidebar__sizes">
					<div class="section-title">
						<h4>Shop by size</h4>
					</div>
					<div class="size__list">
						<label for="xxs"> xxs <input type="checkbox" id="xxs">
							<span class="checkmark"></span>
						</label> <label for="xs"> xs <input type="checkbox" id="xs">
							<span class="checkmark"></span>
						</label> <label for="xss"> xs-s <input type="checkbox" id="xss">
							<span class="checkmark"></span>
						</label> <label for="s"> s <input type="checkbox" id="s">
							<span class="checkmark"></span>
						</label> <label for="m"> m <input type="checkbox" id="m">
							<span class="checkmark"></span>
						</label> <label for="ml"> m-l <input type="checkbox" id="ml">
							<span class="checkmark"></span>
						</label> <label for="l"> l <input type="checkbox" id="l">
							<span class="checkmark"></span>
						</label> <label for="xl"> xl <input type="checkbox" id="xl">
							<span class="checkmark"></span>
						</label>
					</div>
				</div>
				<div class="sidebar__color">
					<div class="section-title">
						<h4>Shop by size</h4>
					</div>
					<div class="size__list color__list">
						<label for="black"> Blacks <input type="checkbox"
							id="black"> <span class="checkmark"></span>
						</label> <label for="whites"> Whites <input type="checkbox"
							id="whites"> <span class="checkmark"></span>
						</label> <label for="reds"> Reds <input type="checkbox" id="reds">
							<span class="checkmark"></span>
						</label> <label for="greys"> Greys <input type="checkbox"
							id="greys"> <span class="checkmark"></span>
						</label> <label for="blues"> Blues <input type="checkbox"
							id="blues"> <span class="checkmark"></span>
						</label> <label for="beige"> Beige Tones <input type="checkbox"
							id="beige"> <span class="checkmark"></span>
						</label> <label for="greens"> Greens <input type="checkbox"
							id="greens"> <span class="checkmark"></span>
						</label> <label for="yellows"> Yellows <input type="checkbox"
							id="yellows"> <span class="checkmark"></span>
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-md-9">
			<div class="row listProduct">

				<c:forEach items="${list_product }" var="item">

					<div class="col-lg-4 col-md-6">
						<div class="product__item">
							<div class="product__item__pic set-bg"
								data-setbg="${ item.image}">
								<div class="label new">New</div>
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
										<fmt:formatNumber value="${ item.price-(item.price/100*item.sale) }" minFractionDigits="0"/> vnđ<span>
											<fmt:formatNumber value="${item.price}" minFractionDigits="0"/> vnđ</span>
									</div>
								</c:when>
								<c:otherwise>
									<div class="product__price"><fmt:formatNumber value="${item.price}" minFractionDigits="0"/> vnđ</div>
								</c:otherwise>
							</c:choose>
							</div>
						</div>
					</div>
				</c:forEach>
				<!-- san pham hien thi o day  -->

				<div class="col-lg-12 text-center">
					<div class="pagination__option">
						<a href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#"><i
							class="fa fa-angle-right"></i></a>
					</div>
				</div> 
			</div>
		</div>
	</div>
	</div>
	</section>
	<!-- Shop Section End -->

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
	<script type="text/javascript">
    function getProduct(id_category) {
        $.ajax({
            url: "shop/",
            method: "GET", // phương thức gửi dữ liệu.
            data: {
                'id_category': id_category,

            },
            // dataType: 'JSON',
            success: function (data) { //dữ liệu nhận về
                $('.listProduct').fadeIn();
                $('.listProduct').html(data);
                //nhận dữ liệu dạng html và gán vào cặp thẻ có class là category_List
            }
        });
    }
</script>
</body>
</html>