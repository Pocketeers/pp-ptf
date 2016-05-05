<?php
//include external php file
include 'dbcon.php';
//start user session
session_start();
include 'restrict.php';

if($conn){

if(isset($_POST['postBtn'])){

	include'addtocompany.php';

}else{


}

//declare $_POST['variable'] as variable that can escape inputed values
$_POST['location']=mysqli_real_escape_string($conn, $_POST['location']);
$_POST['scope']=mysqli_real_escape_string($conn, $_POST['scope']);
$_POST['addinfo']=mysqli_real_escape_string($conn, $_POST['addinfo']);
$_POST['work']=mysqli_real_escape_string($conn, $_POST['work']);
$_POST['employer']=mysqli_real_escape_string($conn, $_POST['employer']);

//insert data to table "posts"
$sql="INSERT INTO posts(
	work,
	salary,
	scope,
	addinfo,
	jobcat,
	date_posted,
	user_id,
	company_id,
	salary_rate,
	post_status,
	address) 
VALUES('$_POST[work]',
	'$_POST[salary]',
	'$_POST[scope]',
	'$_POST[addinfo]',
	'$_POST[jobcat]',
	'$_POST[date_posted]',
	'$_POST[user_id]',
	'$companyid',
	'$_POST[rate]',
	'$_POST[post_status]',
	'$_POST[compay_address]')";

//check if query run
if(mysqli_query($conn, $sql)){
	
	//redirect to link
	header("Location: addmsg.php");
	
}else{

	header("Refresh:5; Location: index.php");
	echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
}
//close sql queries
mysqli_close($conn);
}
?>