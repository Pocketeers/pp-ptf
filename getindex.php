<?php
//include external php file
include 'dbcon.php';

	//check connection
    if($conn){

        //escape user string input
        $_POST['search']=mysqli_real_escape_string($conn, $_POST['search']);

        if(isset($_POST['submit'])){

    		//set sql statement to select all record from "posts" table that matches the input
            $sql = "SELECT * FROM posts WHERE work LIKE '%".$_POST['search']."%' AND post_status = 'published' ORDER BY date_posted DESC";

    		//run sql statement with query
            $results= mysqli_query($conn, $sql);

        }else{

            //set sql statement to select all record from "posts" table that matches the input
            $sql = "SELECT * FROM posts WHERE post_status = 'published' ORDER BY date_posted DESC";

            //run sql statement with query
            $results= mysqli_query($conn, $sql);

        }

    }else{

        echo "The database cannot be connected right now. Please try again later";

    }

    //check if table record exist
        if(mysqli_num_rows($results) > 0){

          //loop to fetch all records
          while($postinfo=mysqli_fetch_array($results)){

            $fromMYSQL = $postinfo['date_posted'];

            //display the records
            echo "<li>".
            "<a class=\"postlink\" href=\"viewpost.php?post_id=".$postinfo['post_id']."\">".
            "<span class='job-employer'>".$postinfo['employer']."</span>".
            "<span class ='job-title'>".$postinfo['work']."</span>".
            "<span class = 'job-category label label-default'>".$postinfo['jobcat']."</span>".
            "<span class = 'job-salary'>RM" .$postinfo['salary']." (Per ".$postinfo['salary_rate'].") </span>" .
            "<span class = 'job-publish-date'>". date("d M", strtotime($fromMYSQL))."</span>".
            "</a>
            </li>";

          }

        }else{

          //display message if no record were found
          echo "0 Results";

        }

?>