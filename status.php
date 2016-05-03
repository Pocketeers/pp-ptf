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
	
	<!-- _navigation -->
  <?php 
     include '_navigation.php';
  ?>
	
	
	
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