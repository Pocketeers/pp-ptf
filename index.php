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
      <h3 class="main-message">You can find part-time and full-time jobs on workwork. So get off the couch and go make some money! </h3>


    <div class="container">

      <!-- Search bar -->
      <form action="index.php" method="post" id="search">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <div class="input-group stylish-input-group">
                <input type="text" name="search" class="form-control"  placeholder="Search" >
                <span class="input-group-addon">
                  <button type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                  </button>
                </span>
              </div>

              <p>
                <div class="form-group row">
                <label for="location" class="col-sm-4 form-control-label">Job Category:</label>
                <div class="col-sm-5">
                  <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                  <select class="form-control" name="jobcat">
                    <option value="">Choose a Category</option>
                    <option value="services">Services</option>
                    <option value="food">Food</option>
                  </select>
                </div>
              </div> 
              </p> 

            </div>
          </div>
        </div>
      </form>

      <div id="job-list" class="col-md-8 col-md-offset-2">
        <hr>
        <?php include'getindex.php'; ?>
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
