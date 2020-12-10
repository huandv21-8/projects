<%@ page language="java" pageEncoding="UTF-8"%>
<%@ taglib uri = "http://java.sun.com/jsp/jstl/core" prefix = "c" %> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>HuanDv | Register</title>
<!-- load Dojo -->
<jsp:include page="partial/linkCSS.jsp"></jsp:include>
</head>
<body class="bg-gradient-primary register">

	<div class="container">

		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg-5 d-none d-lg-block bg-register-image">
					<img alt="" src="">
					</div>
					<div class="col-lg-7">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Create a new account</h1>
							</div>
							<span>${checkRegister }</span>
							<form method="POST" action='<c:url value="/checkRegister" />'>

								<div class="form-group row">
									<div class="col-sm-12 mb-3 mb-sm-0">
										<input id="email" type="email" placeholder="User name"
											class="form-control form-control-user @error('name') is-invalid @enderror"
											name="email" required autocomplete="email" autofocus>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input id="password" type="password" placeholder="Password"
											class="form-control form-control-user @error('password') is-invalid @enderror"
											name="password" required autocomplete="new-password">

									</div>
									<div class="col-sm-6">
										<input id="confirmPass" placeholder="Confirm password"
											type="password" class="form-control"
											name="confirmPass" required
											autocomplete="new-password">
									</div>
								</div>
								<button type="submit" class="btn btn-primary"
									style="width: 100%">Create</button>
								<hr>
								<a href="#"
									class="btn btn-danger btn-user btn-block"> <i
									class="fab fa-google fa-fw"></i> Login with Google
								</a> <a href="#"
									class="btn btn-primary btn-user btn-block"> <i
									class="fab fa-facebook-f fa-fw"></i> Login with Facebook
								</a>
							</form>
							<hr>

							<div class="text-center">
								<a class="small" href='<c:url value="/login" />'>You already
									have an account, please Login</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</body>
</html>