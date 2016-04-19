<?php
//include external php file
include 'dbcon.php';

if($conn){

	$sql = "SELECT * FROM applicant";

	$query = mysqli_query($conn, $sql);

	$appinfo = mysqli_fetch_array($query);

	$sql1 = "SELECT * FROM post where post_id = '$appinfo[post_id]' ";

	$query1 = mysqli_query($conn, $sql);

	$appinfo1 = mysqli_fetch_array($query1);


}else{

	echo "Error! Some codes need to be checked";
}

?>