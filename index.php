<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'><link rel="stylesheet" href="./style.css">

</head>
<body>

	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<a href="login.php"><h6 class="mb-0 pb-3"><span>Click this for Log In </span></h6></a>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
							<form action="register_process.php" method="POST">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Student Sign Up</h4>
											<div class="form-group">
												<input type="text" name="fullname" class="form-style" placeholder="Your Full Name" id="fullname" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="email" name="email" class="form-style" placeholder="Your Email" id="email" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Your Password" id="password" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button class="btn mt-4">Register</button>
				      					</div>
			      					</div>
			      				</div>
							</form>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>

</body>
</html>
