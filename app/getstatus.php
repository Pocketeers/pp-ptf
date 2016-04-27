<?php
//include external php file
include 'dbcon.php';

//set query statement to select "type" record from "user" table with user session
$query = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";

//run sql statement with query
$run = mysqli_query($conn, $query);

//check if record exist
if(mysqli_num_rows($run) > 0){

    //loop to fetch record
    while($check = mysqli_fetch_array($run)){

        //set record as variable
        $type = $check['type'];
    }
}

//check if user session not exist or employee exist
if(!isset($_SESSION['user']) OR ($type == "employer")){

    //redirect to link
    header('Location: index.php');

}else{

	if($conn){

		 //set sql statement to select records from "user" table with user session
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

		    //set sql statement to select records from "applicant" table in a descending order
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

		        //set sql statement to select records from "posts" table
			    $sql2 = "SELECT work, employer FROM posts WHERE post_id = '$postid' ";

			    //run sql statement with query
			    $results2 = mysqli_query($conn, $sql2);

			    if(mysqli_num_rows($results2) > 0){

			    	//loop to fetch records
			        while($postinfo=mysqli_fetch_array($results2)){

			            //set record as variable
			            echo 
			            "<li>".
			            "<b>Job: </b>".
			            $postinfo['work'].
			            " || ".
			            "<b>Employer: </b>".
			            $postinfo['employer'].
			            " || ".
			            "<b>Status: </b>".
			            $status.
			            "</li>";
			        }

			    }else{

			    	echo "No Applications";
			    }

		    }

	    }


	}else{

		echo "Error! Some codes need to be checked";
	}
}

?>