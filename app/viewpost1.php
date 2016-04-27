<?php

include'getviewpost.php';
include'getnavigation.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <Title>View Post</Title>

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
        <a class="nav-link" href="<?php echo $linkhref1; ?>"><?php echo $linktitle1 ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $loginhref; ?>"><?php echo $login ?></a>
      </li>
    </ul>
  </nav>


  <div class="container">

    <!-- echo $_GET['id'] is for displaying all the selected value with selected id only-->
    <input type="hidden" name="post_id" value="<?php echo $_GET['post_id']; ?>"/>

    <div class="row">	
      <div class="col-md-8">

        <div class="job-title">
          <h1> 
            <span class ="job-title"> <?php echo $postinfo['work']; ?> </span> 
          </h1>

        </div>
        </p>

        <h3> Posted on 
         <span class="job-publish-date"><?php echo $postinfo['date_posted']; ?> </span>
       </h3>


       <h2>
         <span class="job-employer"><?php echo $postinfo['employer'];?> </span>
       </h2>

       <hr>


       <div class="job-salary">
        RM<?php echo $postinfo['salary']; ?> per hour
      </div>

      <div class="job-location">
        <?php echo $postinfo['location']; ?>
      </div>	


      <div class="job-scope">
        <?php echo $postinfo['scope']; ?>
      </div>

      <div class="job-info">
        <?php echo $postinfo['addinfo']; ?>
      </div>

      <div class="job-category">
        <?php echo $postinfo['jobcat']; ?>
      </div>

      <div class="job-locationcat">
        <?php echo $postinfo['loccat']; ?>
      </div>


      <?php
      $sql = "SELECT * FROM posts WHERE post_id= $_GET[post_id]";
      if($result=mysqli_query($conn, $sql))
      {
       $postinfo=mysqli_fetch_array($result);
       echo"<a class='btn btn-primary' href=\" updatepost.php?post_id=".$postinfo['post_id']." \">EDIT</a>";
     }
     else
     {
       echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
     }
     ?>

     <div>
     <p>
     <h3>Applicants:</h3>
      <?php include 'getlistapp.php'; ?>
    </div>
    </p>

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