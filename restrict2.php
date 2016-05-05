<?php
//include external php file
include 'dbcon.php';

//set sql statement to select "user_id" record from "user" table with user session
$sql1 = "SELECT user_id FROM user WHERE username = '$_SESSION[user]' ";

//run sql statement with query
$results1 = mysqli_query($conn, $sql1);

//check if record exist
if(mysqli_num_rows($results1) > 0){

    //loop to fetch record
    $userinfo = mysqli_fetch_array($results1);
      
    //set record as variable
    $id = $userinfo['user_id'];

    //set sql statement to select "type" record from "user" table with user session
	$sql2 = "SELECT * FROM posts WHERE user_id = $id ";

	//run sql statement with query
	$results2 = mysqli_query($conn, $sql2);

	if(mysqli_num_rows($results2) > 0){

	//redirect to link
    header('Location: index.php');

	}

}else{

	echo "Error";
}
?>