<div class="container">
	<div class="row">
		<div class="col-md-6">
			<p> Please login first.</p>
			<form method="POST" id="formSignin" onsubmit="return false;">
				<div class="form-group">
					<div class="input-group">
			  			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			  			<input type="text" class="form-control" placeholder="User Name" id="user_signin">
					</div><!-- div.input-group -->
				</div><!-- div.form-group -->
				<div class="form-group">
					<div class="input-group">
			  			<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
			  			<input type="password" class="form-control" placeholder="Password" id="pass_signin">
					</div><!-- div.input-group -->
				</div><!-- div.form-group -->
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Login</button>
				</div><!-- div.form-group -->
				<div class="alert alert-danger hidden"></div>
			</form><!-- form#formSignin -->
		</div><!-- dib.col-md-6 -->
	</div><!-- div.row -->
</div><!-- div.container -->