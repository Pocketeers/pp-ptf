<?php

//for navigation bar
include'getnavigation.php';

//include external php file
include'dbcon.php';
include'register.php';

//set local timezone
date_default_timezone_set("Asia/Kuala_Lumpur");

//set input date function as varianle
$regdate = date("Y.m.d");

?>

<html>

<head>
	<title>Register</title>

	<?php
  //include head php file
	include'_head.php';
	?>
	
</head>

<body>

	<!--Navigation bar -->	
	<nav class="navbar navbar-static-top navbar-dark bg-inverse">
		<a class="navbar-brand" href="#">Part Time Finder</a>
		<ul class="nav navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $linkhref; ?>"><?php echo $linktitle ?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $linkhref1; ?>"><?php echo $linktitle1 ?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $loginhref; ?>"><?php echo $login ?></a>
			</li>
		</ul>
	</nav>

	<br>	

	<div class="container">
		<div class="row">	
			<div class="col-md-8">

				<h2>Registration Form</h2>

				<form  action="" name="prereg.php" method="post">

					<div class="form-group row">
						<label for="email" class="col-sm-2 form-control-label">Email</label>

						<div class="col-sm-8">
							<input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"><br><?php echo $emailerror; ?>
						</div>
					</div>			

					<div class="form-group row">
						<label for="username" class="col-sm-2 form-control-label">Username</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="username" maxlength="12" size="20" value="<?php echo $name; ?>" required><br><?php echo $usererror; ?>
						</div>
					</div>					

					<div class="form-group row">
						<label for="password" class="col-sm-2 form-control-label">Password </label>

						<div class="col-sm-8"> 
							<input type="password" name="password" class="form-control" minlength="6" size="20" required>
						</div>
					</div>	

					<div class="form-group row">
						<label for="password" class="col-sm-2 form-control-label">Confirm Password </label>

						<div class="col-sm-8">				
							<input type="password" name="confirmpwd" class="form-control" minlength="6" size="20" required><br><?php echo $passerror; ?>
						</div>
					</div>					

					<div class="form-group row">
						<label class="col-sm-2">Register as:</label>

						<div class="col-sm-10">
							<div class="radio">
								<label>
									<input type="radio" name="type" value="employer" required> Employer
								</label>	
							</div>
							<div class="radio">
								<label>   					
									<input type="radio" name="type" value="employee"> Employee
								</label>
							</div>
						</div>
					</div>
					
					<input type="hidden" name="regdate" value=<?php echo $regdate ?> readonly>

					<div class="form-group row">
						<div class="col-sm-offset-2 col-sm-10">
							<input name="submitreg" class="btn btn-primary" type="submit" value="Submit">
							<input type="reset" class="btn btn-secondary" value="Reset">
						</div>
					</div>

				</form>

				<p><a href="userlogin.php">Login page</a></p>
				<p><a href="index.php">Back to Home page </a></p>
			</div>
		</div>
	</div>

	<?php
  //include scripts php file
	include'_scripts.php';
	?>
	
</body>

<?php
include'_footer.php';
?>

</html>