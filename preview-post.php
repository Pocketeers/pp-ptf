<?php
include'getnavigation.php';
include'restrict.php';

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

 <!-- _navigation -->
  <?php 
     include '_navigation.php';
  ?>


  <div class="container">

    <div class="row"> 
      <div class="col-md-8">

        <div class="job-title">
          <h1> 
          
            <span class ="job-title"> <?php echo $_POST['work']; ?> </span> 
          </h1>

        </div>
        </p>

        <h3> Posted on 
         <span class="job-publish-date">
         <?php $fromMYSQL = $_POST['date_posted']; echo date("F j, Y", strtotime($fromMYSQL)); ?>
       </span>
       </h3>


       <h2>
         <span class="job-employer"><?php echo $_POST['employer'];?> </span>
       </h2>

       <hr>


       <div class="job-salary">
        RM<?php echo $_POST['salary']; ?> per hour
      </div>

      <div class="job-location">
        <?php echo $_POST['company_address']; ?>
      </div>  


      <div class="job-scope">
        <?php echo $_POST['scope']; ?>
      </div>

      <div class="job-info">
        <?php echo $_POST['addinfo']; ?>
      </div>

      <div class="job-category">
        <?php echo $_POST['jobcat']; ?>
      </div>

      <div class="job-locationcat">
        <?php echo $_POST['state']; ?>
      </div>

  </div>  
</div>
</div>
<form name="create-first-post" action="addpost.php" method="post">
<input type="hidden" name="work" value="<?php echo $_POST['work']; ?>"/>
<input type="hidden" name="salary" value="<?php echo $_POST['salary']; ?>"/>
<input type="hidden" name="scope" value="<?php echo $_POST['scope']; ?>"/>
<input type="hidden" name="addinfo" value="<?php echo $_POST['addinfo']; ?>"/>
<input type="hidden" name="jobcat" value="<?php echo $_POST['jobcat']; ?>"/>
<input type="hidden" name="date_posted" value="<?php echo $_POST['date_posted']; ?>"/>
<input type="hidden" name="user_id" value="<?php echo $_POST['user_id']; ?>"/>
<input type="hidden" name="rate" value="<?php echo $_POST['rate']; ?>"/>
<input type="hidden" name="post_status" value="published"/>
<!-- table company input-->
<input type="hidden" name="employer" value="<?php echo $_POST['employer']; ?>"/>
<input type="hidden" name="company_address" value="<?php echo $_POST['company_address']; ?>"/>
<input type="hidden" name="city" value="<?php echo $_POST['city']; ?>"/>
<input type="hidden" name="state" value="<?php echo $_POST['state']; ?>"/>
<input type="hidden" name="postcode" value="<?php echo $_POST['postcode']; ?>"/>
<input type="hidden" name="country" value="<?php echo $_POST['country']; ?>"/>
<input type="hidden" name="company_info" value="<?php echo $_POST['company_info']; ?>"/>

    <div class="form-group row">
        <div class="col-sm-offset-2 col-sm-10">
          <a class="cancelbtn" href="index.php">CANCEL</a>
           <input class="btn btn-primary" type="submit" name="postBtn" value="POST">
        </div>
    </div>
</form>

  <?php
  //include scripts php file
  include'_scripts.php';
  include'_footer.php';
  ?>

</body>
</html>