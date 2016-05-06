<?php
include'register.php';
//include external php file
include'getnavigation.php';
?>
<html>
<head>
	<title>Part-time jobs at workwork (and some full-time as well)</title>
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
	<div class="container">
		<div class="steps">
			<ul>
				<li class="active-step">1. Create an account</li>
				<li>2. Post job ad</li>
				<li>3. Share</li>
			</ul>
		</div>
		<h1>Step 1: Register</h1>
		<hr>
		<div class="card">
			<div class="card-block">
				<p class="card-text">Do you already have an account? If so, please <a href="userlogin.php">login</a>. If you don't have an account, you can register your first account below</p>
			</div>

		</div>
	</div>						


		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<form  action="" name="job-post.php" method="post">

					<div class="form-group row">
						<label for="email" class="col-sm-2 form-control-label">Email</label>

						<div class="col-sm-8">
							<input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"><br><span style="color:red;"><?php echo $emailerror; ?></span>
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
							<input type="text" class="form-control" name="username" maxlength="12" size="20" required><br><span style="color:red;"><?php echo $usererror; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputphone" class="col-sm-2 form-control-label"> Phone:</label>
						<div class="col-sm-8">
							<input type="tel" class="form-control" name="usercontact" value="<?php echo $phone; ?>" maxlength="12" size="20" required pattern="(\+?\d[- .]*){10,11}$" required> (Format: 0123456789 / 01123456789)
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
							<input type="password" name="confirmpwd" class="form-control" minlength="6" size="20" required><br><span style="color:red;"><?php echo $passerror; ?></span>
						</div>
					</div>

					<input type="hidden" name="type" value="employer" required>

					<input type="hidden" name="regdate" value=<?php echo $regdate ?> readonly>

					<div class="form-group row">
						<div class="col-sm-offset-2 col-sm-10">
							<input name="submitreg" class="btn btn-primary" type="submit" value="Submit">
							<input type="reset" class="btn btn-link" value="Reset">
						</div>
					</div>

				</form>
			</div>
		</div>


	</div>
	<?php
  //include scripts php file
  include'_scripts.php';
  include'_footer.php';
  ?>

</body>
</html>
