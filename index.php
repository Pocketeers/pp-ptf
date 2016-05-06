<?php
//include external php file
include'getnavigation.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Part-time jobs at workwork (and some full-time as well)</title>
  <?php
  //include head php file
  include'_head.php';
  ?>
</head>

<body class="main-page">

  <!-- _navigation -->
  <?php
  include '_navigation.php';
  ?>

  <div class="jumbotron oh-hello">
  </div>



  <div class="middlebody">

      <h3 class="main-message">There's plenty of part-time gigs on workwork. So get off the couch and go make some money! <br><small>#NoLazyMoarMoney #AlwaysBeHustling</small> </h3>


    <div class="container">
      <!-- Search bar -->

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-inline" action="index.php" method="post">
              <div class="form-group">
                <input type="text" name="search" class="form-control"  placeholder="Search">
              </div>

              <div class="form-group">  
                <select class="form-control" name="jobcat">
                  <option value="">Choose a Category</option>
                  <option value="services">Services</option>
                  <option value="food">Food</option>
                </select> 
              </div>

              

              <button type="submit" class="btn btn-primary">Search</button>

            </form>
        </div>
      </div>

            <div id="job-list" class="col-md-8 col-md-offset-2">
              <hr>

              <?php include'getindex.php'; ?>
              <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>

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
