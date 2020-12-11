<%@ page language="java" pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Tutorial: Hello Dojo!</title>
<jsp:include page="partial/linkCSS.jsp"></jsp:include>
<!-- load Dojo -->

</head>
<body>

	<div class="container">
		<h2>Horizontal form</h2>
		${check }
		<form class="form-horizontal" method="post" action='<c:url value="createProduct" />'>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Name product:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nameProduct"
						placeholder="Enter name product" name="nameProduct">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Description:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="description"
						placeholder="Enter description" name="description">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Price:</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="price"
						placeholder="Enter price" name="price">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Image:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="image"
						placeholder="Enter image" name="image">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
			</div>
		</form>
	</div>

</body>
</html>