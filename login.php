<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>CurveFC:ล็อกอิน</title>

	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="./css/login_styles.css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<section class="container">
	    <section class="login-form">

		<section>
			<img src="./img/logo.png" alt="" />
		</section>
		<div class="panel panel-default">
		  	<div class="panel-body">
		    	<form method="post" action="" role="login">
					<div class="form-group">
						<label>Username</label>
						<input type="email" name="email" required class="form-control" />
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" required class="form-control" />
					</div>

					<input type="checkbox" name="remember" value="1" /> Remember me
					<button type="submit" name="go" class="btn btn-primary btn-block">Log in</button>
				</form>
		  	</div>
		  	<div class="panel-footer">
		  		<a href="#">Lost your password?</a>
		  	</div>
		</div>
		<section>
			<a href="#">&larr; Back to Dashboard</a>
		</section>

		</section>
	</section>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
