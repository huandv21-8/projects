<%@ page language="java" pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>HuanDv | Login</title>
<!-- load Dojo -->
<jsp:include page="partial/linkCSS.jsp"></jsp:include>
</head>
<body class="bg-gradient-primary login">
	<div class="container">
		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-10 col-lg-12 col-md-9">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Log in</h1>
									</div>
									<span>${checkLogin }</span>
									<form method="POST" action='<c:url value="/checkLogin" />'>

										<div class="form-group">
											<input id="email" placeholder="Enter Your Username"
												type="email"
												class="form-control form-control-user  is-invalid @enderror"
												name="email" required autocomplete="email" autofocus>
										</div>
										<div class="form-group">
											<input id="password" type="password"
												placeholder="Enter Your Password"
												class="form-control form-control-user  is-invalid @enderror"
												name="password" required autocomplete="current-password">
										</div>

										<div class="form-group pl--4">
											<button type="submit" class="btn btn-primary"
												style="width: 100%">Login</button>

											<a class="btn btn-link" style="width: 100%" href='<c:url value="/register" />'>Register</a>
										</div>
										<hr>
										<a href="#" class="btn btn-primary btn-user btn-block"> <i
											class="fab fa-google fa-fw"></i> Login with Google
										</a> <a href="#" class="btn btn-danger btn-user btn-block"> <i
											class="fab fa-facebook-f fa-fw"></i> Login with Facebook
										</a>
									</form>
									<hr>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>