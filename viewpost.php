<?php
//include external php file
include'getviewpost.php';
include'getnavigation.php';

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
    
    <!-- echo $_GET['id'] is for displaying all the selected value with selected id only-->
    
    <input type="hidden" name="post_id" value="<?php echo $_GET['post_id']; ?>"/>
    
    <a href='index.php' class='btn btn-link'>Back to all jobs</a>
    
    <div class="row">	
      <div class="col-md-8">
        
        <div class="job-title">
         <h1> 
          <span class ="job-title"> <?php echo $postinfo['work']; ?> </span> 
        </h1>
      </div>
      
 <!--date("d M", strtotime($fromMYSQL))
 $fromMYSQL = $postinfo['date_posted']; -->     
      
      <h6 style="color:#888"> Posted on 
       <span class="job-publish-date">
       <?php  $fromMYSQL = $postinfo['date_posted'];
       echo date("F j, Y", strtotime($fromMYSQL)); ?> </span>
     </h6>
     
     

     <h2>
       <span class="job-employer"><?php echo $postinfo['employer'];?> </span>
     </h2>

     
     <hr>
     

     <div class="job-salary">
      RM<?php echo $postinfo['salary']; ?> per hour
    </div>
    
    <div class="job-location">
      <?php echo $postinfo['location']; ?>
    </div>	
    

    <div class="job-scope">
      <?php echo $postinfo['scope']; ?>
    </div>
    
    <div class="job-info">
      <?php echo $postinfo['addinfo']; ?>
    </div>
    
    <div class="job-category">
      <?php echo $postinfo['jobcat']; ?>
    </div>
    
    <div class="job-locationcat">
      <?php echo $postinfo['loccat']; ?>
    </div>
    
    
    <?php
    echo "<br>".$apply;
    ?>
    

<?php
//include scripts php file
include'_scripts.php';
include'_footer.php';
?>

  </div>

  



</body>



</html>