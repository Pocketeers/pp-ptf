<?php
session_start();

include 'dbcon.php';
if($conn){
//declare $_POST['variable'] as variable that can escape inputed values
$_POST['location']=mysqli_real_escape_string($conn, $_POST['location']);
$_POST['scope']=mysqli_real_escape_string($conn, $_POST['scope']);
$_POST['addinfo']=mysqli_real_escape_string($conn, $_POST['addinfo']);
$_POST['work']=mysqli_real_escape_string($conn, $_POST['work']);
$_POST['employer']=mysqli_real_escape_string($conn, $_POST['employer']);

//insert data to table "posts"
$sql="INSERT INTO posts(
	work,
	employer,
	salary,
	location,
	scope,
	addinfo,
	jobcat,
	loccat,
	date_posted,
	user_id) 
VALUES('$_POST[work]',
	'$_POST[employer]',
	'$_POST[salary]',
	'$_POST[location]',
	'$_POST[scope]',
	'$_POST[addinfo]',
	'$_POST[jobcat]',
	'$_POST[loccat]',
	'$_POST[date_posted]',
	'$_POST[userid]')";

if(mysqli_query($conn, $sql)){
	echo "Your post has been saved!<br>";
	echo "<a href='index1.php'>Back to Job Feed</a>";
}
else{
	echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<html>
<head>
    <Title>Success!</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
</html>