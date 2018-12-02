<!DOCTYPE html>
<html lang="en">
    <head>
		
		<!-- web fonts are display properly -->
		<meta charset="utf-8">

		<!-- for supporting correctly internet explorer -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 

		<!-- for device based responisive and browser scaling  -->
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="css/font-awesome.min.css">

	    <!-- my custom css -->
		<link rel="stylesheet" href="css/register.css">
		<link rel="stylesheet" href="../style.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin</title>
	</head>

	
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Sign up once and watch any of our free demos.</h5>
					<form class="" method="post" action="#">
						<div class="form-group">
							<div class="cols-sm-10">
								<label for="exampleFormControlSelect1">Select Your Prof.</label>
								<div class="input-group">
								    <span class="input-group-addon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
								    <select class="form-control" id="exampleFormControlSelect1" required="">
								      <option>Enter your Profession</option>
								      <option>As an Employee</option>
								      <option>As an Employer</option>
								    </select>
								</div>    
								 
							</div>
						</div>

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Phone No</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your phone number"/>
								</div>
							</div>
						</div>

						

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password" required/>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Location</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="location" id="location"  placeholder="select your location"/>
								</div>
							</div>
						</div>	
						

						<div class="form-group ">
							<a href="" target="_blank" type="button" id="mybtn" class="btn btn-primary btn-lg btn-block login-button">Register</a>
						</div>
						
					</form>
				</div>
			</div>
		</div>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>