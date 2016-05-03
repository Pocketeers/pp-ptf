<?php
//inlcude external php file
include "dbcon.php";

//start user session
session_start();

//check if user session exist
if(!isset($_SESSION['user']))
{

	//redirect to link
	header('Location: userlogin.php');

}
else
{   
	//check the current value 
	$sql2 = "SELECT * FROM posts WHERE post_id='$_GET[post_id]'";
    $result2 = mysqli_query($conn,$sql2);

        $row = mysqli_fetch_assoc($result2);

        if($row['post_status'] == 'published')
          {
             $sql = "UPDATE posts SET post_status='unpublished' WHERE post_id='$_GET[post_id]'";
          }	 
        else
          {
          	$sql = "UPDATE posts SET post_status='published' WHERE post_id='$_GET[post_id]'";
          }

	//check query run
	if($result=mysqli_query($conn,$sql))
	{

		//fetch record
		//echo "Done";
	}
	else
	{

		//diplay error message
		echo "Unsucessful". "<br>". mysqli_error($conn);
		header("Refresh:5; Location: index.php");
		
	}

	header('Location: myads.php');
}

?>