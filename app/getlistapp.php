<?php
include 'dbcon.php';

if($conn){

	$sql = "SELECT * FROM applicant WHERE post_id = $_GET[post_id] ";
	$query = mysqli_query($conn, $sql);

	if(mysqli_num_rows($query) > 0){

		while($appinfo = mysqli_fetch_array($query)){

			echo 
			"<ul>
			<li>".$appinfo['aname']." - ".$appinfo['status']." - "."<a class='btn btn-primary' href=\" #.php?post_id=".$appinfo['post_id']." \">Decline</a>"." , "."<a class='btn btn-primary' href=\" #.php?post_id=".$appinfo['post_id']." \">Accept</a></li>
			</ul>";

		}

	}else{

		echo "No Results";
	}


}
?>