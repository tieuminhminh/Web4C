
<html>
	<head>
		<title>Register</title>

		  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

	</head>
<body>
				
			<h2>Register</h2>
				
				
				
				<a href="http://web.net:8080/"> Traveling blogs </a>
	<form class="form-horizontal" action="process.php" method="post">
		
				
			<div class="form-group">
				<label class="control-label col-sm-2" for="Username">UserName:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="pass">PassWord:</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="pass" placeholder="Enter pass" name="pass">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Name:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Email:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				</div>
			</div>

				<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit"  class="btn btn-default" name="btn_submit">Register</button>
					</div>
				</div>
				
 
	</form>
	</body>
	</html>