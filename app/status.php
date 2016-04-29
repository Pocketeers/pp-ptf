<?php
//include external php file
include'getnavigation.php';
include'restrict1.php';
?>

<!-- for the text box for work experience section -->
<script type="text/javascript">
	function show() { document.getElementById('area').style.display = 'block'; }
	function hide() { document.getElementById('area').style.display = 'none'; }
</script>

<!DOCTYPE html>
<html>
<head>
	<title>My Applications Status</title>     
	
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
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo $linkhref1; ?>"><?php echo $linktitle1 ?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $loginhref ?>"><?php echo $login ?></a>
			</li>
		</ul>
	</nav>
	
	
	
	<div class="container">
		<p><h2>My Applications Status</h2></p>
		
		<ol>
		<?php 

			include 'getstatus.php';

		?>
		</ol>

		<div class="row">	
			<div class="col-md-8">
				
				
				
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