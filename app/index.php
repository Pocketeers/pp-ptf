<?php
//include external php file
include'getnavigation.php';
include'getindex.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Part Time Finder</title>
  <?php
  //include head php file
  include'_head.php';
  ?>
</head>

<body>

  <nav class="navbar navbar-static-top navbar-dark bg-inverse">
    <a class="navbar-brand" href="#">Part Time Finder</a>
    <ul class="nav navbar-nav">
      <li class="nav-item active">
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

  <div class="jumbotron oh-hello">
    <div class="container">
      <h1 class="display-3">Part Time Finder</h1>
      <p>Helps connect the ones looking for part-time jobs with the right people! </p>
      <p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a>
      </p>
    </div>
  </div>



  <div class="middlebody">

    <br>

    <!-- Search bar -->
    <form action="index.php" method="post">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button name ="submit" class="btn btn-default" type="submit">Search</button>
              </span>
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
        </div>
      </div>
    </form>

    <br>

    <!-- start of table -->
    <div class="container">
      <h2 style="text-align: center;"> Available Jobs </h2>

      <br>

      <ul class='jobs list-inline'>
        <?php

        //check if table record exist
        if(mysqli_num_rows($results) > 0){

          //loop to fetch all records
          while($postinfo=mysqli_fetch_array($results)){

            //display the records
            echo "<li>".
            "<a class=\"postlink\" href=\"viewpost.php?post_id=".$postinfo['post_id']."\">".
            "<span class='job-employer'>".$postinfo['employer']."</span>".
            "<span class ='job-title'>".$postinfo['work']."</span>".
            "<span class = 'job-category label label-default'>".$postinfo['jobcat']."</span>".
            "<span class = 'job-salary'>RM" .$postinfo['salary']. "(Per Hour)</span>" .
            "<span class = 'job-publish-date'>". $postinfo['date_posted']."</span>".
            "</a>
            </li>";

          }

        }else{

          //display message if no record were found
          echo "No Results";

        }

        ?>
      </ul>
    </div>

  </div>

  <?php
  //include scripts php file
  include'_scripts.php';
  include'_footer.php';
  ?>

</body>

</html>
