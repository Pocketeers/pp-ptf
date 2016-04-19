<?php
//include external php file
include'navigation.php';
include'getstatus.php';
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
		
	<!-- Bootstrap -->
	<!-- Required meta tags always come first -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
	
	
	
    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
	
		<link rel="stylesheet" type="text/css" href="css/theme.css">
		
</head>
	<body>
	
	  <nav class="navbar navbar-static-top navbar-dark bg-inverse">
      <a class="navbar-brand" href="#">Part Time Finder</a>
          <ul class="nav navbar-nav">
            <li class="nav-item active">
				<a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
              </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $myadshref; ?>"><?php echo $myads ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $createhref ?>"><?php echo $create ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $loginhref ?>"><?php echo $login ?></a>
        </li>
      </ul>
    </nav>
		
		
		
       <div class="container">
		<p><h2>My Status</h2></p>
		
		<ul>
		<?php 
			if(mysqli_num_rows($query) > 0){

			while($appinfo){

				if(mysqli_num_rows($query1) > 0){

					while($appinfo1){

					echo "<li>".$appinfo['post_id'].", ".$appinfo['']."</li>";

					}
				}
				
			}

			}else{

					echo "error";
				} 
		?>
		</ul>
	

		<div class="row">	
          <div class="col-md-8">
		
		
		
		  </div>
		</div>
	  </div>
	  
	</body>
	
</html>