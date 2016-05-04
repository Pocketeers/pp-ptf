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
      <form name="create-post" action="addpost.php" method="post">

        <!-- Gets today's date -->			  
        <?php
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $date = date("Y,m,j H:i:s");
        ?>
        
        <div class="form-group row">
          <label for="jobtitle" class="col-sm-2 form-control-label">Job Title</label>
          <div class="col-sm-8">
            <input name="work" class="form-control" type="text" required>
          </div>
        </div>
        
        <div class="form-group row">
          <label for="employer" class="col-sm-2 form-control-label">Employer</label>
          <div class="col-sm-8">
           <input name="employer" class="form-control" type="text" required>
         </div>
       </div>
       
       <div class="form-group row">
        <label for="salary" class="col-sm-2 form-control-label">Salary:
          RM</label>
          <div class="col-sm-8">
            <input name="salary" class="form-control" min="1" type="number" required>
          </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2">Salary Rate:</label>
            <div class="col-sm-8">
            <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
            <select class="form-control" name="rate">
              <option value="hour">Per Hour</option>
              <option value="month">Per Month</option>
            </select>
          </div>
        </div>
        
        <div class="form-group row">
          <label for="address" class="col-sm-2 form-control-label">Address</label>
          <div class="col-sm-8">
            <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
            <textarea rows="7" cols="40" maxlength="2000" class="form-control" name="location" required></textarea>
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
            <textarea rows="7" cols="40" maxlength="2000" class="form-control editable" name="scope"></textarea>
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
            <textarea rows="7" cols="40" maxlength="2000" class="form-control editable" name="addinfo"></textarea>
          </div>
        </div>
      </div>
    </div>
</div>

        
        <div class="form-group row">
          <label for="jobcat" class="col-sm-2 form-control-label">Job Category</label>
          <div class="col-sm-8">
            <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
            <select class="form-control" name="jobcat">
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
              <option value="Kuala Lumpur">Kuala Lumpur</option>
              <option value="Selangor">Selangor</option>
            </select>
          </div>
        </div>	
        
        
        <div class="form-group row">
          <label for="employer" class="col-sm-2 form-control-label">Date  </label>
          <div class="col-sm-8">
            <input class="form-control" name="date_posted" type="text" value="<?php echo $date; ?>" readonly>
          </div>
        </div>
        
        <input name="userid" type="hidden" value="<?php echo $userid; ?>">
        
        <div class="form-group row">
         <div class="col-sm-offset-2 col-sm-10">
          <a class="cancelbtn" href="index.php">CANCEL</a>
          <form action="demo_form.asp" method="get">
           <input class="btn btn-primary" type="submit" name="submitBtn" value="POST">
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