<html>
<head>

		<title> User Registration </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style2.css">
		
</head>
<body>

<div class="container">
	<div class="login-box">
	<div class="row">
	<div class="col-md-6 signup">
		<h2> Register Here </h2>
		<form action="registration.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" required>
			</div>
			<div class="center">
			<button type="submit" class="btn btn-primary"> Register </button>
			</div>
			<div>
			<a href="Login.php">Already have an account?Login here</a>
			</div>
		</form>
	</div>
	</div>
</div>
</div>
</body>
</html>
	 
