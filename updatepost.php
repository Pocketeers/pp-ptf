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

     <link rel="stylesheet" href="gizmos/voog/editor.css" />
		
</head>
<body>

<!-- _navigation -->
  <?php 
     include '_navigation.php';
  ?>
	
	<div class="container">
	  <div class="row">	
          <div class="col-md-8">
              <h1>Edit Post</h1>
               <form name="create-post" action="updatepost.php" method="post">
			   
<!-- echo $_GET['id'] is for displaying all the selected value with selected id only-->
	               <input type="hidden" name="post_id" value="<?php echo $_GET['post_id']; ?>"/>
                 <input type="hidden" name="company_id" value="<?php echo  $company_id['company_id']; ?>"/>
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
                      <input required name="company_name" class="form-control" type="text" value="<?php echo $postinfo['company_name']; ?>">
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
            <select class="form-control" name="salary_rate">
            <option value="<?php echo $postinfo['salary_rate']; ?>">Per <?php echo $postinfo['salary_rate']; ?></option>
              <option value="hour">Per hour</option>
              <option value="month">Per month</option>
            </select>
          </div>
        </div>
        
                <div class="form-group row">
                  <label for="address" class="col-sm-2 form-control-label">Address</label>
				    <div class="col-sm-8">
                    <input required type="text" maxlength="2000" class="form-control" name="company_address" value="<?php echo $postinfo['company_address']; ?>"></input>
					</div>
				</div>

        <div class="form-group row">
          <label for="city" class="col-sm-2 form-control-label">City</label>
          <div class="col-sm-8">
           <input name="city" class="form-control" type="text" value="<?php echo $postinfo['city']; ?>" required>
         </div>
       </div>

       <div class="form-group row">
            <label class="col-sm-2">State:</label>
            <div class="col-sm-8">
            <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
            <select class="form-control" name="state">
            <option value="<?php echo $postinfo['state']; ?>"><?php echo $postinfo['state']; ?></option>
              <option value="Kuala Lumpur">Kuala Lumpur</option>
              <option value="Johor">Johor</option>
              <option value="Kedah">Kedah</option>
              <option value="Kelantan">Kelantan</option>
              <option value="Melaka">Melaka</option>
              <option value="Negeri Sembilan">Negeri Sembilan</option>
              <option value="Pahang">Pahang</option>
              <option value="Penang">Penang</option>
              <option value="Perak">Perak</option>
              <option value="Perlis">Perlis</option>
              <option value="Selangor">Selangor</option>
              <option value="Sabah">Sabah</option>
              <option value="Sarawak">Sarawak</option>
              <option value="Terengganu">Terengganu</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="country" class="col-sm-2 form-control-label">Country</label>
          <div class="col-sm-8">
           <input name="country" class="form-control" type="text" value="Malaysia" readonly>
         </div>
       </div>

       <!--editor-->
  <div class="foreditor">
    <div class="ewrapper" contentEditable="false">
      <div class="toolbar">
    <!-- 
    <div class="editable" ***important>
    --> 

        <div class="form-group row">
        <label for="scope" class="col-sm-2 form-control-label">Scope of Work</label>
          <div class="col-sm-8">
            <div class="block">
            <a data-wysihtml5-command="bold" title="CTRL+B">bold</a>
            <a data-wysihtml5-command="italic" title="CTRL+I">italic</a>
            <a data-wysihtml5-command="insertUnorderedList">&bull; List</a>
            <a data-wysihtml5-command="insertOrderedList">1. List</a>
            </div>
            <textarea rows="7" cols="40" maxlength="2000" class="form-control editable" name="scope"><?php echo $postinfo['scope']; ?></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
        

 <!--editor-->
  <div class="foreditor">
    <div class="ewrapper" contentEditable="false">
      <div class="toolbar">
    <!-- 
    toolbar
    <div class="editable" ***important>
    -->   
        <div class="form-group row">
          <label for="addinfo" class="col-sm-2 form-control-label">Additional Info</label>
          <div class="col-sm-8">
            <div class="block">
            <a data-wysihtml5-command="bold" title="CTRL+B">bold</a>
            <a data-wysihtml5-command="italic" title="CTRL+I">italic</a>

            <a data-wysihtml5-command="insertUnorderedList">&bull; List</a>
            <a data-wysihtml5-command="insertOrderedList">1. List</a>
            </div>

       <textarea rows="7" cols="40" maxlength="2000" class="form-control editable" name="addinfo"><?php echo $postinfo['addinfo']; ?>
      </textarea>
          </div>
        </div>
       </div>
    </div>
  </div>

  <!--editor-->
  <div class="foreditor">
    <div class="ewrapper" contentEditable="false">
      <div class="toolbar">
    <!-- 
    toolbar
    <div class="editable" ***important>
    -->   
        <div class="form-group row">
          <label for="company_info" class="col-sm-2 form-control-label">Company Info</label>
          <div class="col-sm-8">
            <div class="block">
            <a data-wysihtml5-command="bold" title="CTRL+B">bold</a>
            <a data-wysihtml5-command="italic" title="CTRL+I">italic</a>

            <a data-wysihtml5-command="insertUnorderedList">&bull; List</a>
            <a data-wysihtml5-command="insertOrderedList">1. List</a>
            </div>

       <textarea rows="7" cols="40" maxlength="2000" class="form-control editable" name="company_info"><?php echo $postinfo['company_info']; ?>
      </textarea>
          </div>
        </div>
       </div>
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

     <script src="jquery.1.10.2.js" type="text/javascript" charset="utf-8"></script>

   <script src="gizmos/voog/wysihtml-toolbar.min.js"></script>
   <script src="gizmos/voog/advanced_and_extended.js"></script>

<script>
var editors = [];

  $('.ewrapper').each(function(idx, wrapper) {
    var e = new wysihtml5.Editor($(wrapper).find('.editable').get(0), {
      toolbar:        $(wrapper).find('.toolbar').get(0),
      parserRules:    wysihtml5ParserRules,
      pasteParserRulesets: wysihtml5ParserPasteRulesets
      //showToolbarAfterInit: false
    });
    editors.push(e);
    
    e.on("showSource", function() {
      alert(e.getValue(true));
    });
    
  });
  
</script>


</body>
</html>