<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body class="">

	<form method="POST" action="reginsert.php">
		<h1>Registration form</h1>
	<div class="container">
		<div class="row">
			<div class="col-6 col-md-12">
				<label class="input-group">First name:</label>
				<input type="text"  class="form-control " name="firstname" placeholder="Enter your firstname" autocomplete="off" required>
			</div>
			<div class="col-6 col-md-12">
				<label class="input-group">Last name:</label>
				<input type="text" class="form-control"name="lastname" placeholder="Enter your lastname" autocomplete="off" required>
			</div>
		</div>
		<div class="row">
			<div class="col-6 col-md-12">
				<label class="input-group">Password:</label>
				<input type="password" class="form-control" name="password" placeholder="Enter your Password" autocomplete="off" required>
			</div>
			<div class="col-6 col-md-12">
				<label class="input-group">Contact:</label>
				<input type="text" class="form-control" name="contact" placeholder="Enter your contact number" minlength="10" maxlength="10" autocomplete="off" required>
			</div>
		</div>
		<div class="row">
			<div class="col-6 col-md-12">
				<label class="input-group">City:</label>
				<input type="text"  class="form-control"name="city" placeholder="Enter your city" autocomplete="off" required>
			</div>
			<div class="col-6 col-md-12">
				<label class="input-group">Address</label>
				<textarea type="text" class="form-control" name="address" placeholder="Enter your address" autocomplete="off" required></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<input type="submit" name="submit" class="btn btn-success">
				<input type="reset" name="cancel" class="btn btn-danger">
			</div>
		</div>
	</div>
	</form>

	</body>
</html>