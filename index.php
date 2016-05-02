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
      <h1 class="display-3"></h1>
    </div>
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
