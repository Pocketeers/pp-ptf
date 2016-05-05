<?php
//for navigation bar
include'getnavigation.php';
include'register.php';
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

<!-- _navigation -->
  <?php 
     include '_navigation.php';
  ?>

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
						<label for="username" class="col-sm-2 form-control-label">Full Name</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="name" maxlength="12" size="20" value="<?php echo $name; ?>" required><br>
						</div>
					</div>			

					<div class="form-group row">
						<label for="username" class="col-sm-2 form-control-label">Username</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="username" maxlength="12" size="20" value="<?php echo $name; ?>" required><br><?php echo $usererror; ?>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputphone" class="col-sm-2 form-control-label"> Phone:</label>
						<div class="col-sm-8">
							<input type="tel" class="form-control" name="usercontact" size="10" value="<?php echo $phone; ?>" required pattern="(\+?\d[- .]*){10,11}$" required> (Format: 0123456789 / 01123456789)
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