
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<header class="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-3 col-lg-2">
				<div class="header__logo">
					<a href="#"><img class="logo"
						src='<c:url value="/resources/img/logo1.png" />' alt=""></a>
				</div>
			</div>
			<div class="col-xl-6 col-lg-7">
				<nav class="header__menu">
					<ul>
						<li class="active"><a href='<c:url value="/" />'>Home</a></li>

						<li><a href='<c:url value="/shop" />'>Shop</a></li>
						<li><a href="#">Pages</a>
							<ul class="dropdown">
								<li><a href="./product-details.html">Product Details</a></li>
								<li><a href="./shop-cart.html">Shop Cart</a></li>
								<li><a href="./checkout.html">Checkout</a></li>
								<li><a href="./blog-details.html">Blog Details</a></li>
							</ul></li>
						<li><a href="./blog.html">Blog</a></li>
						<li><a href="./contact.html">Contact</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-lg-3">
				<div class="header__right">
					<div class="header__right__auth">
						<%
							if (session.getAttribute("user") != null) {
						%>
						<p class>
							<strong><%=session.getAttribute("user")%></strong>
							<div class="logout"><a href='<c:url value="/logout" />'>logout</a></div>
						</p>
						<button class="btn btn-primary"  onclick="window.location.href='/Hello/createProduct'">Create product</button>
					
						
						<%
							}else{
						%>
						<a href='<c:url value="/login" />'>Login</a>
								<a href='<c:url value="/register" />'>Register</a>
						
						<%
							}
						%>
						
					</div>
					<ul class="header__right__widget">
						<li><i class="fas fa-search"></i></li>
						<li><a href="#"><i class="far fa-heart"></i>
								<div class="tip">2</div> </a></li>
						<li><a href="#"><i class="fas fa-shopping-bag"></i>
								<div class="tip">2</div> </a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="canvas__open">
			<i class="fa fa-bars"></i>
		</div>
	</div>
</header>