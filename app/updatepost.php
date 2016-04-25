<?php
include'getupdatepost.php';

//for navigation bar
include'getnavigation.php';

?>

<html>
<head>

    <Title>Edit Post</Title>
	
    <!-- Bootstrap -->
	<!-- Required meta tags always come first -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
	
	
	
    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
	
		<link rel="stylesheet" type="text/css" href="css/theme.css">
		
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
                      <input required name="salary" class="form-control" type="number" value="<?php echo $postinfo['salary']; ?>"> (per hour)
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
</body>
</html>