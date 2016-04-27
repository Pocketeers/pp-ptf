<?php
include 'dbcon.php';

if($conn){
	
	$sql = "UPDATE applicant SET status = 'ACCEPTED' WHERE app_id = $_GET[app_id] ";

	$query = mysqli_query($conn, $sql);

	if($query){

		$sql1 = "SELECT post_id FROM applicant WHERE app_id = $_GET[app_id] ";

		$query1 = mysqli_query($conn, $sql1);

		$row = mysqli_num_rows($query1);

		while($info = mysqli_fetch_array($query1)){

			$id = $info['post_id'];

			header("Location: viewpost1.php?post_id=$id");

		}

	}else{

		echo "Not Successful";
	}

}
?>