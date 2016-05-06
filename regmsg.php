<?php
//include external php file
include'getnavigation.php';
?>
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
  <div class="container">
    <div class="steps">
      <ul>
        <li class="active-step">1. Create an account</li>
        <li>2. Post job ad</li>
        <li>3. Share</li>
      </ul>
    </div>



    <h1>Step 1: Register</h1>
    <hr>
    <h2 class="text-xs-center">Nice! Your registration is a beautiful thing.</h2>
    <p class="text-xs-center">
      <a href="create-first-post.php" class="btn btn-primary">Let's create your first job ad</a>
    </p>
  </div>
  <?php
  //include scripts php file
  include'_scripts.php';
  include'_footer.php';
  ?>
</body>
</html>
