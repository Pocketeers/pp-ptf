<?php
//include external php file
include'getnavigation.php';
include'getform.php';
?>

<!-- for the text box for work experience section -->
<script type="text/javascript">
	function show() { document.getElementById('area').style.display = 'block'; }
	function hide() { document.getElementById('area').style.display = 'none'; }
</script>

<!DOCTYPE html>
<html>
<head>
	<title>Apply job</title>     
	
	<?php
  //include head php file
	include'_head.php';
	?>
	
</head>
<body>
	
	<nav class="navbar navbar-static-top navbar-dark bg-inverse">
		<a class="navbar-brand" href="#">Part Time Finder</a>
		<ul class="nav navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $linkhref; ?>"><?php echo $linktitle ?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $linkhref1 ?>"><?php echo $linktitle1 ?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $loginhref ?>"><?php echo $login ?></a>
			</li>
		</ul>
	</nav>
	
	
	
	<div class="container">
		
		<h2>Apply for <?php echo $postinfo['work']; ?></h2>
		
		<div class="row">	
			<div class="col-md-8">
				
				
				
				<form  action="sendemail.php" name="myForm" method="Post" enctype="multipart/form-data">
					
					<div class="form-group row">
						<label for="inputto" class="col-sm-2 form-control-label">To</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="tosend" size="30" value="<?php echo $userinfo1['email']; ?>" readonly>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="inputname" class="col-sm-2 form-control-label"> * Name:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="aname" size="30" required></td>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="inputage" class="col-sm-2 form-control-label"> * Age:</label>
						<div class="col-sm-10">
							<td><input type="number" class="form-control" name="age" min="15" max="60" required></td>
						</div>
					</div>
					
					
					<div class="form-group row">
						<label class="col-sm-2">* Work Experience:</label>
						<div class="col-sm-10">
							<div class="radio">
								<label><input type="radio" name="experience" value="yes" onclick="show('area');" required> Yes <br><textarea row="10" cols="30" name="area" placeholder="(Provide details about previous work) Example: I used to work at..." id="area" style="display:none;"></textarea></label>
								
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="experience" value="no" onclick="hide('area');"> No 
								</label>
							</div>
						</div>
					</div>
					
					<div class="form-group row">
						<label class="col-sm-2">Attach Resume:</label>
						<div class="col-sm-10">
							<input type="file" class="btn btn-secondary" name="file">
						</div>
					</div>
					
					
					<div class="form-group row">
						<label for="inputphone" class="col-sm-2 form-control-label"> * Phone:</label>
						<div class="col-sm-10">
							<input type="tel" class="form-control" name="contact" size="10" required pattern="(\+?\d[- .]*){10,11}$" required> (Format: 0123456789 / 01123456789)
						</div>
					</div>				  
					
					<div class="form-group row">
						<label for="inputemail" class="col-sm-2 form-control-label">* Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="email" value="<?php echo $userinfo2['email']; ?>" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"> (Ex: shahnaz@gmail.com)

							<input type="hidden" class="form-control" name="postid" value="<?php echo $postinfo['post_id']; ?>" required>
							<input type="hidden" class="form-control" name="status" value="PENDING" required>
						</div>
					</div>
					<br>
					<div class="form-group row">
						<div class="col-sm-offset-2 col-sm-10">
							<a class="cancelbtn" href="index.php">CANCEL</a>
							<input type="reset" class="btn btn-secondary" value="RESET">
							<input type="submit" class="btn btn-primary" value="SUBMIT">
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