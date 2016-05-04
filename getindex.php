<?php
//include external php file
include 'dbcon.php';

	//check connection
    if($conn){

        $results = "";

        //escape user string input
        $_POST['search']=mysqli_real_escape_string($conn, $_POST['search']);

        if(!isset($_POST['search']) AND !isset($_POST['jobcat'])){

    		//set sql statement to select all record from "posts" table that matches the input
            $sql = "SELECT * FROM posts WHERE post_status = 'published' ORDER BY date_posted DESC";

        }else{

            $sql = "SELECT * FROM posts WHERE post_status = 'published' AND work LIKE '%$_POST[search]%' AND jobcat LIKE '%$_POST[jobcat]%' ORDER BY date_posted DESC";

        }

        //run sql statement with query
        $results= mysqli_query($conn, $sql);

        //check if table record exist
        if(mysqli_num_rows($results) > 0){

          //loop to fetch all records
          echo "<ul class='jobs list-inline'>";
          while($postinfo=mysqli_fetch_array($results)){

            //display the records
            //
            //if($highlight==true){$text="<li class='highlight'>"}
            //else $text = "<li>";
            //replace "<li>" with $text.

            $fromMYSQL = $postinfo['date_posted'];

            //display the records
            echo "<li>".
            "<a class=\"postlink\" href=\"viewpost.php?post_id=".$postinfo['post_id']."\">".
            "<span class='job-employer'>".$postinfo['employer']."</span>".
            "<span class='job-title'>".$postinfo['work']."</span>".
            //"<span class = 'job-category label label-default'>".$postinfo['jobcat']."</span>".
            "<span class='job-salary'><sup class='currency'>RM</sup>" .$postinfo['salary']." <sub class='salary-rate-type'>/ ".$postinfo['salary_rate']."</sub> </span>" .
            "<span style='display:none;' class = 'job-publish-date'>". date("d M", strtotime($fromMYSQL))."</span>".
            "</a>
            </li>";

          }
          echo "</ul>";

        }else{

          //display message if no record were found
          echo "0 Results";

        }

    }else{

        echo "The database cannot be connected right now. Please try again later";

    }


?>
