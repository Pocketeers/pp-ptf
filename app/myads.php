<?php
include'getindex1.php';
include'getnavigation.php';
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
      if(mysqli_num_rows($results) > 0){
        while($postinfo=mysqli_fetch_array($results)){
          
          echo "<li>".
          "<a class=\"postlink\" href=\"viewpost1.php?post_id=".$postinfo['post_id']."\">"
          ."<span class='job-employer'>".$postinfo['employer'].
          "</span>"
          ."<span class='job-title'>".$postinfo['work']."</span>"
          ."<span class = 'job-salary'>RM" .$postinfo['salary'].
          "</span>"
          ."<span class = 'job-publish-date'>". $postinfo['date_posted']."</span>"
          ."</a>";
          
          

                        //Delete & Edit section; "\" --> escape character 
						//Inline CSS styling added here!
          
          echo "<span class='myadDelete'><a class='btn btn-danger' href=\" delmessage.php?post_id=".$postinfo['post_id']." \">Delete</a></span>";
          
          echo "<span class='myadEdit'><a class='btn btn-secondary' href=\" updatepost.php?post_id=".$postinfo['post_id']." \">Edit</a></span>";
          
          echo "</li>";
                        //<a href=\"viewpost.php?id=".$postinfo['id']."\">
        }
      }else{
        echo "0 results" ;
      }
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