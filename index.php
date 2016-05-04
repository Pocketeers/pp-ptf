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
                  <input type="text" class="form-control"  placeholder="Search" >
                  <span class="input-group-addon">
                    <button type="submit">
                      <span class="glyphicon glyphicon-search"></span>
                    </button>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>

      <br>


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
