<?php
//include external php file
include 'dbcon.php';

    //set sql statement to select "user_id" record from "user" table with user session
    $sql1 = "SELECT user_id FROM user WHERE username = '$_SESSION[user]' ";

    //run sql statement with query
    $results1= mysqli_query($conn, $sql1);

    //check if record exist
    if(mysqli_num_rows($results1) > 0){

        //loop to fetch records
        while($userinfo1=mysqli_fetch_array($results1)){

            //set record as variable
            $userid = $userinfo1['user_id'];
        }

        //set sql statement to select all record from "posts" table in a descending order
        $sql = "SELECT * FROM posts WHERE user_id = '$userid' ORDER BY date_posted DESC ";
        
        //run sql statement with query
        $results= mysqli_query($conn, $sql);

        if(mysqli_num_rows($results) > 0){

        while($postinfo=mysqli_fetch_array($results)){
          
         $fromMYSQL = $postinfo['date_posted'];

          echo 
          "<li>".
          "<a class=\"postlink\" href=\"viewpost1.php?post_id=".$postinfo['post_id']."\">"
          ."<span class='job-employer'>".$postinfo['employer'].
          "</span>"
          ."<span class='job-title'>".$postinfo['work']."</span>"
          ."<span class = 'job-salary'>RM" .$postinfo['salary'].
          "</span>"
          ."<span class = 'job-publish-date'>".date("d M", strtotime($fromMYSQL))."</span>"
          ."</a>";
          
                        //Delete & Edit section; "\" --> escape character 
                        //Inline CSS styling added here!
          
          echo "<span class='myadDelete'><a class='btn btn-danger' href=\" delmessage.php?post_id=".$postinfo['post_id']." \">Delete</a></span>";
          
          echo "<span class='myadEdit'><a class='btn btn-secondary' href=\" updatepost.php?post_id=".$postinfo['post_id']." \">Edit</a></span>";
          
          echo "</li>";
                        //<a href=\"viewpost.php?id=".$postinfo['id']."\">
        }

      }else{

        echo "0 results" ;

      }

    }
?>