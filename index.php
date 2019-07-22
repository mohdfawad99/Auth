
<!DOCTYPE html>
<html>
	
<head>

	<title>title</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><h3><b>&nbsp;Auth</b></h3></a>
		</div>
		<!-- menu items -->
		
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="index.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
			</ul>
		</div>
	</div>
</nav>

	  
	  
	  
<div class="container">
	<div class="row">
		
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="login.php" method="post" name="loginform">
				<fieldset>
					<legend>Search</legend>
					
					<div class="form-group">
						<label for="name">Email</label>
						<input type="email" name="email" placeholder="email" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="pass" placeholder="password" required class="form-control" />
					</div>

					<div class="form-group">
						<input  type="submit" name="Search" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		New User? <a href="register.php">Register Here</a>
		
		</div>
	</div>
	
	
</div><br><br><br>
<script src="basith.js"></script>
<script src="call.js"></script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script id="dsq-count-scr" src="//http-awesomeprogram-000webhostapp-com.disqus.com/count.js" async></script>

</body>

</html>
