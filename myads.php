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
	
<!-- _navigation -->
  <?php 
     include '_navigation.php';
  ?>	
  
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