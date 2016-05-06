<?php
//include external php file
include'getnavigation.php';
?>
<html>
<head>
  <title>workwork</title>
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
  <div class="container">
    <div class="steps">
      <ul>
        <li>1. Create an account</li>
        <li>2. Post job ad</li>
        <li class="active-step">3. Publish &amp; share</li>
      </ul>
    </div>



    <h1>Step 3: Publish &amp; share</h1>
    <hr>
    <h2 class="text-xs-center m-b-4">Success! Your new job ad has just been published on the internetz.</h2>
    <p class="text-xs-center">
      You can view it here:
    </p>
    <p class="text-xs-center">
      <a href="#" class="btn btn-link">http://www.workwork.com/viewpost.php?post_id=x</a> <a href="#" class="btn btn-primary">copy</a>
    </p>
    <p class="text-xs-center">
      <a href="myads.php" class="btn btn-link">View my ads</a>
    </p>
  </div>
  <?php
  //include scripts php file
  include'_scripts.php';
  include'_footer.php';
  ?>
</body>
</html>
