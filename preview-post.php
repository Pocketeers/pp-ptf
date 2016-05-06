<?php
include'getnavigation.php';
include'restrict.php';
include 'restrict2.php';

$fromMYSQL = $_POST['date_posted'];
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
    <div id="job-ad-display">
      <div class="row">
        <div class="col-md-9">

          <h1 class="job-title">
            <?php echo $_POST['work']; ?>
          </h1>

          <h2 class="job-employer">
            <?php echo $_POST['employer'];?>
          </h2>

          <div class="job-location">
            <?php echo $_POST['company_address']; ?>
          </div>

          <div class="job-city">
            <?php echo $_POST['city']; ?>
          </div>

          <div class="job-state">
            <?php echo $_POST['state']; ?>
          </div>

          <small class="job-publish-date">Posted on <?php echo date("d M", strtotime($fromMYSQL)); ?>
          </small>
        </div>

        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <div class="job-category small">
                <?php echo $_POST['jobcat']; ?>
              </div>
            </div>
            <div class="card-block">
              <div class="job-salary">
                <?php echo "<sup class='currency'>RM</sup>" . $_POST['salary'] . " <sub class='salary-rate-type'>/ " . $_POST['rate'] . "</sub>" ?>
              </div>
              <br>
              <a href="#" class="btn btn-default disabled">APPLY</a>
            </div>
          </div>
          <!-- /card -->

        </div>
      </div>

      <!-- job content -->
      <hr>
      <div class="row">
        <div class="col-md-8">
          <!-- job details -->
          <div class="job-details m-b-3">
            <div class="job-scope m-b-2">
              <?php echo $_POST['scope']; ?>
            </div>

            <div class="job-info m-b-2">
              <h5>Additional information</h5>
              <?php echo $_POST['addinfo']; ?>
            </div>
          </div>

          <!-- end job details -->



          <!-- company details -->
          <div class="company-info m-b-3">
            <h4>About <?php echo $_POST['employer'];?></h4>
            <div class="job-company m-b-1">
              <?php echo $_POST['company_info']; ?>
            </div>

            <div class="company-address m-b-1">
              <h5>Address</h5>
              <div class="job-location">
                <?php echo $_POST['company_address']; ?>
              </div>

              <div class="job-city">
                <?php echo $_POST['city']; ?>
              </div>

              <div class="job-state">
                <?php echo $_POST['state']; ?>
              </div>

              <div class="job-postcode">
                <?php echo $_POST['postcode']; ?>
              </div>

              <div class="job-city">
                <?php echo $_POST['country']; ?>
              </div>
            </div>
          </div>
          <!-- end company details -->

        </div>
      </div>
    </div>
    <form name="create-first-post" action="create-first-post.php" method="post">
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


      <input class="btn btn-link" type="submit" name="editBtn" value="Edit">


    </form>

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


      <input class="btn btn-primary" type="submit" name="postBtn" value="Publish your ad">

    </form>
    <!-- end job content -->
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
