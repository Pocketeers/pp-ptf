<?php
//for navigation bar
include 'getnavigation.php';
include 'restrict.php';
include 'getcreatepost.php';

?>
<html>
<head>
  <title>Create Post</title>
  
  <?php
  //include head php file
  include'_head.php';
  ?>

  <!--For editor-->
  
  
  

  <!-- <link rel="stylesheet" type="text/css" href="gizmos/wysihtml5/src/bootstrap-wysihtml5.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="gizmos/trumbowyg/dist/ui/trumbowyg.min.css"> -->

  <link rel="stylesheet" href="gizmos/voog/editor.css" />

  
</head>
<body>

<!-- _navigation -->
  <?php 
     include '_navigation.php';
  ?>
 

 <br>
 
 
 <div class="container">
   <div class="row">	
    <div class="col-md-8">
      <h1>Create Post</h1>
      
      <!-- Form for data input -->
      <form name="create-post" action="preview-post.php" method="post">

        <!-- Gets today's date -->			  
        <?php
        $date = date("Y,m,j H:i:s");
        ?>
        
         <div class="form-group row">
          <label for="jobtitle" class="col-sm-2 form-control-label">Job Title</label>
          <div class="col-sm-8">
            <input name="work" class="form-control" type="text" value="<?php echo $_POST['work']; ?>" required>
          </div>
        </div>
        
        <div class="form-group row">
          <label for="employer" class="col-sm-2 form-control-label" >Employer</label>
          <div class="col-sm-8">
           <input name="employer" class="form-control" type="text" value="<?php echo $_POST['employer']; ?>" required>
         </div>
       </div>
       
       <div class="form-group row">
        <label for="salary" class="col-sm-2 form-control-label">Salary:
          RM</label>
          <div class="col-sm-8">
            <input name="salary" class="form-control" min="1" type="number" value="<?php echo $_POST['salary']; ?>" required>
          </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2">Salary Rate:</label>
            <div class="col-sm-8">
            <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
            <select class="form-control" name="rate" placeholder="Select State" required>
            <option value="" disabled selected>Select Rate</option>
              <option value="hour">Per Hour</option>
              <option value="month">Per Month</option>
            </select>
          </div>
        </div>
        
        <div class="form-group row">
          <label for="company_address" class="col-sm-2 form-control-label">Address</label>
          <div class="col-sm-8">
           <input name="company_address" class="form-control" type="text" value="<?php echo $_POST['company_address']; ?>" required>
         </div>
       </div>

       <div class="form-group row">
          <label for="city" class="col-sm-2 form-control-label">City</label>
          <div class="col-sm-8">
           <input name="city" class="form-control" type="text" value="<?php echo $_POST['city']; ?>" required>
         </div>
       </div>

      <div class="form-group row">
          <label for="state" class="col-sm-2 form-control-label">State</label>
          <div class="col-sm-8">
            <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
            <select class="form-control" name="state" required>
              <option value="" disabled selected>Select State</option>
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
          <label for="postcode" class="col-sm-2 form-control-label">Postcode</label>
          <div class="col-sm-8">
           <input name="postcode" class="form-control" type="text" value="<?php echo $_POST['postcode']; ?>" required>
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

            <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
            <textarea rows="7" cols="40" maxlength="3000" class="form-control editable" name="scope" ><?php echo $_POST['scope']; ?></textarea>
            <!-- <div id="trumbowyg-toolbar" name="scope"></div> -->
            <div id="summernote" name="scope"></div>
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
            <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
            <textarea rows="7" cols="40" maxlength="2000" class="form-control editable" name="addinfo"><?php echo $_POST['addinfo']; ?></textarea>
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
    <div class="editable" ***important>
     -->          
        <div class="form-group row">
          <label for="company_info" class="col-sm-2 form-control-label">Company info</label>
          <div class="col-sm-8">
          <div class="block">
        <a data-wysihtml5-command="bold" title="CTRL+B">bold</a>
        <a data-wysihtml5-command="italic" title="CTRL+I">italic</a>
      
      
        <a data-wysihtml5-command="insertUnorderedList">&bull; List</a>
        <a data-wysihtml5-command="insertOrderedList">1. List</a>
      
      </div>

            <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
            <textarea rows="7" cols="40" maxlength="2000" class="form-control editable" name="company_info"><?php echo $_POST['company_info']; ?></textarea>
            <!-- <div id="trumbowyg-toolbar" name="scope"></div> -->
            <div id="summernote" name="company_info"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

        
        <div class="form-group row">
          <label for="jobcat" class="col-sm-2 form-control-label">Job Category</label>
          <div class="col-sm-8">
            <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
            <select class="form-control" name="jobcat" required>
              <option value="" disabled selected>Select Job Category</option>
              <option values="Services">Services</option>
              <option values="Food">Food</option>
            </select>
          </div>
        </div>  

        
        <input class="form-control" name="date_posted" type="hidden" value="<?php echo $date; ?>" readonly>

        <input name="user_id" type="hidden" value="<?php echo $userid; ?>">
        <input name="company_id" type="hidden" value="<?php echo $companyid; ?>">
        
        <div class="form-group row">
         <div class="col-sm-offset-2 col-sm-10">
          <a class="cancelbtn" href="index.php">CANCEL</a>
          <form action="demo_form.asp" method="get">
           <input class="btn btn-primary" type="submit" name="prevBtn" value="PREVIEW">
           <input class="btn btn-secondary" type="reset" name="resetBtn" value="RESET">
         </form>
       </div>
     </div>
     
     
     
   </form>

   <?php
  //include scripts php file
   include'_scripts.php';
   include'_footer.php';
   ?>

  <!--  <script src="gizmos/wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
   <script src="gizmos/wysihtml5/src/bootstrap-wysihtml5.js"></script> -->
   <!-- <script src="gizmos/trumbowyg/dist/trumbowyg.min.js"></script> -->
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


   <script>
    // $('.textarea').wysihtml5();
    // $(prettyPrint);
    // $('#trumbowyg-toolbar').trumbowyg();

   </script>

 </body>
 </html>