<?php
//include extenal php file
include "dbcon.php";
//start user session
session_start();
include 'restrict.php';


//set sql statement to delete posts record with selected id
$sql = "DELETE FROM posts WHERE post_id='$_GET[post_id]'";

//check if query run
if($result=mysqli_query($conn,$sql)){

	//refresh page & redirect to link
	header("refresh:1; url = myads.php");

}else{

	//display error message
	echo "Unsucessful". "<br>". mysqli_error($conn);
	header("Refresh:5; Location: index.php");

}
?>