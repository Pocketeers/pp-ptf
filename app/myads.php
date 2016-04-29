<?php
include'getnavigation.php';
include'restrict.php';
?>

<!DOCTYPE html>
<html>
<head>
	
	<Title>Job List</Title>
  
  <?php
  //include head php file
  include'_head.php';
  ?>
  
</head>

<body>
	
	<!-- Naviation bar -->	
	<nav class="navbar navbar-static-top navbar-dark bg-inverse">
    <a class="navbar-brand" href="#">Part Time Finder</a>
    <ul class="nav navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
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
    <h2 style="text-align: center;"> My Ads </h2>
    
    <br>			
    <ul class='jobs list-inline'> 
     
      <?php

      include'getmyads.php';

      ?>
    </ul>
  </div>
  
  
  <div class="container">	

    <?php
  //include scripts php file
    include'_scripts.php';
    ?>
    
  </body>
  
  
  <?php
    include'_footer.php';
  ?>
</div>


</html>