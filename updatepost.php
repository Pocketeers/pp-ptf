<?php
//include external file
include'getnavigation.php';
include'restrict.php';
include'getupdatepost.php';

?>

<html>
<head>

    <Title>Edit Post</Title>
	
 <?php
  //include head php file
  include'_head.php';
 ?>
		
</head>
<body>

<!--Navigation bar -->	
	<nav class="navbar navbar-static-top navbar-dark bg-inverse">
      <a class="navbar-brand" href="#">Part Time Finder</a>
          <ul class="nav navbar-nav">
            <li class="nav-item">
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
	
	<div class="container">
	  <div class="row">	
          <div class="col-md-8">
              <h1>Edit Post</h1>
               <form name="create-post" action="updatepost.php" method="post">
			   
<!-- echo $_GET['id'] is for displaying all the selected value with selected id only-->
	               <input type="hidden" name="post_id" value="<?php echo $_GET['post_id']; ?>"/>
				   </div>
				</div>
				
				<div class="form-group row">
                  <label for="jobtitle" class="col-sm-2 form-control-label">Job Title</label>
				    <div class="col-sm-8">
                      <input required name="work" class="form-control" type="text" value="<?php echo $postinfo['work']; ?>" >
					</div>
				</div>
        
                <div class="form-group row">
                  <label for="employer" class="col-sm-2 form-control-label">Employer</label>
				    <div class="col-sm-8">
                      <input required name="employer" class="form-control" type="text" value="<?php echo $postinfo['employer']; ?>">
					</div>
				</div>
        
		        <div class="form-group row">
                  <label for="salary" class="col-sm-2 form-control-label">Salary:
                RM</label>
				    <div class="col-sm-8">
                      <input required name="salary" class="form-control" min="1" type="number" value="<?php echo $postinfo['salary']; ?>">
					</div>
				</div>

        <div class="form-group row">
            <label class="col-sm-2">Salary Rate:</label>
            <div class="col-sm-8">
            <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
            <select class="form-control" name="loccat">
            <option value="<?php echo $postinfo['salary_rate']; ?>">Per <?php echo $postinfo['salary_rate']; ?></option>
              <option value="hour">Per hour</option>
              <option value="month">Per month</option>
            </select>
          </div>
        </div>
        
                <div class="form-group row">
                  <label for="address" class="col-sm-2 form-control-label">Address</label>
				    <div class="col-sm-8">
            <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                    <textarea required rows="7" cols="40" maxlength="2000" class="form-control" name="location"><?php echo $postinfo['location']; ?></textarea>
					</div>
				</div>
        
                <div class="form-group row">
                  <label for="scope" class="col-sm-2 form-control-label">Scope of Work</label>
				    <div class="col-sm-8">
                      <textarea rows="7" cols="40" maxlength="2000" class="form-control" name="scope"><?php echo $postinfo['scope']; ?></textarea>
					</div>
				</div>
        
                <div class="form-group row">
                  <label for="addinfo" class="col-sm-2 form-control-label">Additional Info</label>
				    <div class="col-sm-8">
                      <textarea rows="7" cols="40" maxlength="2000" class="form-control" name="addinfo"><?php echo $postinfo['addinfo']; ?>
					  </textarea>
					</div>
				</div>
        
                <div class="form-group row">
                  <label for="jobcat" class="col-sm-2 form-control-label">Job Category</label>
				    <div class="col-sm-8">
            <!-- Dropdown list for category -->
                     <select class="form-control" name="jobcat">
	                    <option value="<?php echo $postinfo['jobcat']; ?>" selected><?php echo $postinfo['jobcat']; ?></option>
	                    <option values="Services">Services</option>
	                   <option values="Food">Food</option>
                     </select>
                    </div>       
	            </div>
	   
                <div class="form-group row">
                  <label for="location" class="col-sm-2 form-control-label">Location Category</label>
				    <div class="col-sm-8">
            <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                      <select class="form-control" name="loccat">
                       <option value="<?php echo $postinfo['loccat']; ?>"><?php echo $postinfo['loccat']; ?></option>
                        <option value="Kuala Lumpur">Kuala Lumpur</option>
                        <option value="Selangor">Selangor</option>
                      </select>
                    </div>
				</div>
      
                <div class="form-group row">
                  <label for="employer" class="col-sm-2 form-control-label">Date Post </label>
				    <div class="col-sm-8">
                      <input class="form-control" name="date_posted" type="text" value="<?php echo $postinfo['date_posted']; ?>" readonly>
				    </div>
			    </div>
        
		
		        <div class="form-group row">
			      <div class="col-sm-offset-2 col-sm-10">
                    <a class="cancelbtn" href="index.php">CANCEL</a>
                    <form action="demo_form.asp" method="get">
					  <input class="btn btn-primary" type="submit" name="submitBtn" value="SUBMIT">
					</form>
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