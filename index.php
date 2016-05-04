<?php
//include external php file
include'getnavigation.php';
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

<!-- _navigation -->
  <?php 
     include '_navigation.php';
  ?>

<div class="jumbotron oh-hello">
  </div>




  <div class="middlebody">

     <p>
      <h5> Available Jobs </h5>
    </p>

    <div class="container">

    <!-- Search bar -->
    <form action="index.php" method="post">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="text" name="search" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon"> 
                    </span>
                </div>

                <p>
                <div class="form-group row">
                <label for="location" class="col-sm-4 form-control-label">Job Category:</label>
                <div class="col-sm-5">
                  <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                  <select class="form-control" name="jobcat">
                    <option value="services">Services</option>
                    <option value="food">Food</option>
                  </select>
                </div>
              </div> 
              </p> 

            </div>
        </div>
  </div>
</div>
    </form>

    <br>
    <hr>

      <ul class='jobs list-inline'>
        <?php

        include'getindex.php';

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
