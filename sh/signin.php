
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel = "stylesheet" href= "loginForm.css"/>
	
</head>
<body>



	
		<div class="container" id = "container_color" >
			<div class="row" id ="loginForm">
				<div class="col-sm">
				
				</div>
				<div class="col-sm">
				
					<form action = "loginandsession.php" method = "post">
						<div class="form-group" >
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" name = "mail" aria-describedby="emailHelp" placeholder="Enter email">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" name = "password"  placeholder="Password">
						</div>
						<button type="submit" class="btn btn-primary">Log In</button>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  							Sign Up
						</button>
				</form>		
						<!-- Button trigger modal -->
						

						

						<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  							<div class="modal-dialog modal-dialog-centered" role="document">
    							<div class="modal-content">
      								<div class="modal-header">
        								<h5 class="modal-title" id="exampleModalLongTitle">Sign Up</h5>
        								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          									<span aria-hidden="true">&times;</span>
        								</button>
      								</div>
      								<div class="modal-body">
									    <form action = "registration.php" method = "post">
											<div class="form-group" >
												<label for="exampleInputEmail1">Email address</label>
												<input type="email" class="form-control" id="exampleInputEmail1" name = "mail" aria-describedby="emailHelp" placeholder="Enter email">
												<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Password</label>
												<input type="password" class="form-control" id="exampleInputPassword1" name = "password1"  placeholder="Password">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Re type Password</label>
												<input type="password" class="form-control" id="exampleInputPassword1" name = "password2"  placeholder="Password">
											</div>
										
      						    	</div>
      							<div class="modal-footer">
        							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        							<button type="submit" class="btn btn-primary">Sign Up</button>
      							</div>
								  </form>
    						</div>
  						</div>
					</div>
				</div>
				<div class="col-sm">
				
				</div>
			</div>
		</div>
		
	
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>