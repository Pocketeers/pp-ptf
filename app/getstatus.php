<?php
//include external php file
include 'dbcon.php';

if($conn){

	 //set sql statement to select "user_id" record from "user" table with user session
    $sql = "SELECT email FROM user WHERE username = '$_SESSION[user]' ";

    //run sql statement with query
    $results= mysqli_query($conn, $sql);

    //check if record exist
    if(mysqli_num_rows($results) > 0){

        //loop to fetch records
        while($userinfo=mysqli_fetch_array($results)){

            //set record as variable
            $useremail = $userinfo['email'];
        }

	    //set sql statement to select all record from "posts" table in a descending order
	    $sql1 = "SELECT post_id, status FROM applicant WHERE email = '$useremail' ";

	    //run sql statement with query
	    $results1= mysqli_query($conn, $sql1);

		if(mysqli_num_rows($results1) > 0){

		    //loop to fetch records
	        while($appinfo=mysqli_fetch_array($results1)){

	            //set record as variable
	            $postid = $appinfo['post_id'];
	            $status = $appinfo['status'];
	        }

	        //set sql statement to select records from "applicant" table
		    $sql2 = "SELECT work, employer FROM posts WHERE post_id = '$postid' ";

		    //run sql statement with query
		    $results2= mysqli_query($conn, $sql2);

	    }

    }


}else{

	echo "Error! Some codes need to be checked";
}

?>