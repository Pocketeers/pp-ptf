<?php
include'getnavigation.php';
include'getuserlogin.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Login</title>

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

				<h2>Login</h2>

				<form action="userlogin.php" method="Post">

					<!-- Form -->				
					<div class="form-group row">
						<label for="username" class="col-sm-2 form-control-label">Username</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="username" maxlength="15" size="20" required autocomplete="off">
						</div>
					</div>

					<div class="form-group row">
						<label for="password" class="col-sm-2 form-control-label">Password </label>
						<div class="col-sm-8">
							<input type="password" name="password" class="form-control" minlength="6" size="15" required>
							<span style="color:red; margin:20%;"><?php echo $msg; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" name="login" class="btn btn-primary" value="Login">
							<input type="reset" class="btn btn-secondary" value="Reset">
						</div>
					</div>

					<p style="margin-top:20px">
						New user? Sign up <a href="prereg.php">here. </a>
					</p>
					<a href="index.php">Back to home page</a>

					<form>
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