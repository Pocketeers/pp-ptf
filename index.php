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
