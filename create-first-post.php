<?php
//for navigation bar
include 'getnavigation.php';
include 'restrict.php';
include 'restrict2.php';
include 'getcreatepost.php';

?>
<html>
<head>
  <title>workwork</title>

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
    <div class="steps">
      <ul>
        <li>1. Create an account</li>
        <li class="active-step">2. Post job ad</li>
        <li>3. Share</li>
      </ul>
    </div>
    <h1>Step 2: Create and post a new job ad</h1>
    <hr>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <!-- Form for data input -->
        <form name="create-first-post" action="preview-post.php" method="post">

          <!-- Gets today's date -->
          <?php
          $date = date("Y,m,j H:i:s");
          ?>

          <div class="form-group row">
            <label for="jobtitle" class="col-sm-3 form-control-label">Job Title</label>
            <div class="col-sm-8">
              <input name="work" class="form-control" type="text" value="<?php echo $_POST['work']; ?>" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="jobcat" class="col-sm-3">Category</label>
            <div class="col-sm-8">
              <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
              <select class="form-control" name="jobcat" required>
                <option value="" disabled selected>Select Job Category</option>
                <option values="Services">Services</option>
                <option values="Food">Food</option>
              </select>
            </div>
          </div>



          <div class="form-group row">
            <label for="salary" class="col-sm-3 form-control-label">Salary</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <div class="input-group-addon">RM</div>
                  <input name="salary" class="form-control" min="1" type="number" value="<?php echo $_POST['salary']; ?>" required>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3">Salary rate</label>
              <div class="col-sm-8">
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                <select class="form-control" name="rate" placeholder="Select State" required>
                  <option value="" disabled selected>Select Rate</option>
                  <option value="hour">Per Hour</option>
                  <option value="month">Per Month</option>
                </select>
              </div>
            </div>

            <h3>Job details</h3>
            <!--editor-->
            <div class="foreditor">
              <div class="ewrapper" contentEditable="false">
                <div class="toolbar">
                  <!--
                  <div class="editable" ***important>
                -->
                <div class="form-group">
                  <label for="scope">Scope of Work</label>
                  <div>
                    <div class="block">
                      <a data-wysihtml5-command="bold" title="CTRL+B">bold</a>
                      <a data-wysihtml5-command="italic" title="CTRL+I">italic</a>


                      <a data-wysihtml5-command="insertUnorderedList">&bull; List</a>
                      <a data-wysihtml5-command="insertOrderedList">1. List</a>

                    </div>

                    <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                    <textarea rows="10" cols="40" maxlength="3000" class="form-control editable" name="scope" ><?php echo $_POST['scope']; ?></textarea>
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

              <div class="form-group">
                <label for="addinfo">Additional Info</label>
                <div>
                  <div class="block">
                    <a data-wysihtml5-command="bold" title="CTRL+B">bold</a>
                    <a data-wysihtml5-command="italic" title="CTRL+I">italic</a>

                    <a data-wysihtml5-command="insertUnorderedList">&bull; List</a>
                    <a data-wysihtml5-command="insertOrderedList">1. List</a>
                  </div>
                  <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                  <textarea rows="5" cols="40" maxlength="2000" class="form-control editable" name="addinfo"><?php echo $_POST['addinfo']; ?></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>

        <h3>Company details</h3>

        <div class="form-group row">
          <label for="employer" class="col-sm-3 form-control-label" >Company name</label>
          <div class="col-sm-8">
            <input name="employer" class="form-control" type="text" value="<?php echo $_POST['employer']; ?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="company_address" class="col-sm-3 form-control-label">Address</label>
          <div class="col-sm-8">
            <input name="company_address" class="form-control" type="text" value="<?php echo $_POST['company_address']; ?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="city" class="col-sm-3 form-control-label">City</label>
          <div class="col-sm-8">
            <input name="city" class="form-control" type="text" value="<?php echo $_POST['city']; ?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="state" class="col-sm-3 form-control-label">State</label>
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
          <label for="postcode" class="col-sm-3 form-control-label">Postcode</label>
          <div class="col-sm-8">
            <input name="postcode" class="form-control" type="text" value="<?php echo $_POST['postcode']; ?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="country" class="col-sm-3 form-control-label">Country</label>
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
            <div class="form-group">
              <label for="company_info">Company info</label>
              <div>
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





      <input class="form-control" name="date_posted" type="hidden" value="<?php echo $date; ?>" readonly>

      <input name="user_id" type="hidden" value="<?php echo $userid; ?>">
      <input name="company_id" type="hidden" value="<?php echo $companyid; ?>">

      <div class="form-group row">
        <div class="col-sm-12">
          <!-- <a class="cancelbtn" href="index.php">CANCEL</a> -->
          <form action="demo_form.asp" method="get">
            <input class="btn btn-primary" type="submit" name="prevBtn" value="Preview">
            <input class="btn btn-link" type="reset" name="resetBtn" value="Reset">
          </form>
        </div>
      </div>



    </form>

    <?php
    //include scripts php file
    include'_scripts.php';
    include'_footer.php';
    ?>

    <!-- <script src="jquery.1.10.2.js" type="text/javascript" charset="utf-8"></script> -->

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
