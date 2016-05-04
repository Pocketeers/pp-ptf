<?php

//declare $_POST['variable'] as variable that can escape inputed values
$_POST['aname']=mysqli_real_escape_string($conn, $_POST['aname']);
$_POST['age']=mysqli_real_escape_string($conn, $_POST['age']);
$_POST['experience']=mysqli_real_escape_string($conn, $_POST['experience']);
$_POST['email']=mysqli_real_escape_string($conn, $_POST['email']);
$_POST['area']=mysqli_real_escape_string($conn, $_POST['area']);

//insert data to table "posts"
$sql="INSERT INTO applicant(
	aname,
	age,
	experience,
	contact,
	email,
	exp_details,
	post_id,
	status) 
VALUES('$_POST[aname]',
	'$_POST[age]',
	'$_POST[experience]',
	'$_POST[contact]',
	'$_POST[email]',
	'$_POST[area]',
	'$_POST[postid]',
	'$_POST[status]')";


//check if query run
if(mysqli_query($conn, $sql)){


}else{

	echo "Not Successful";
}

?>