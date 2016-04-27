<?php
//include external php file
include 'dbcon.php';
session_start();

//set sql statement to select "type" record from "user" table
$sql1 = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";

//run sql statement using query
$results1 = mysqli_query($conn, $sql1);

//check if table record exist
if(mysqli_num_rows($results1) > 0){

    //loop to fetch all "type" record
    while($userinfo = mysqli_fetch_array($results1)){

        //set as variable
        $type = $userinfo['type'];

        }
}

//check if user session exist
if(!isset($_SESSION['user'])){

    //redirect to link
    header('Location: userlogin.php');

}elseif($type == "employee"){

	//redirect to link
    header('Location: index.php');

}else{

	//set sql statement to select userid record from "user" table with user session
	$sql="SELECT user_id FROM user WHERE username = '$_SESSION[user]' ";

	//run sql statement with query
	$results=mysqli_query($conn, $sql);

	//check if record exist
	if(mysqli_num_rows($results) > 0){

	    //loop to fetch record
	    while($userinfo=mysqli_fetch_array($results)){

	        //set record as variable
	        $userid =  $userinfo['user_id'];
	    }

	}else{

	    //display error message
	    echo "Error: some codes are not correctly placed or one of the code spelling is wrong or does not match, please check back your codes";
	}
}
?>