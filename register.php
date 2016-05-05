<?php
//include php external file
include 'dbcon.php';
session_start();

//set local timezone
date_default_timezone_set("Asia/Kuala_Lumpur");

//set input date function as varianle
$regdate = date("Y.m.d");

//check if user session exist
if(isset($_SESSION['user'])){

	//redirect to link
	header("Location: index.php");
}

//check if the field exists
if(!isset($_POST['email']) && !isset($_POST['username']) && !isset($_POST['password'])){

	// set error message as variable
	$emailerror = "";
	$usererror = "";
	$passerror = "";

}else{

	//set field as variable
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['usercontact'];

	//set sql statement to select all username & email
	$sql1 = "SELECT username,email FROM user WHERE username = '$_POST[username]' OR email = '$_POST[email]' ";

	//run sql statement using query
	$results1 = mysqli_query($conn, $sql1);

	//set record row
	$rows = mysqli_num_rows($results1);

	//fetch record
	$compare = mysqli_fetch_array($results1);

	//set record as variable
	$compare['email'];
	$compare['username'];

	//check if password field input is not a match
	if($_POST['confirmpwd'] != $_POST['password']){

		//set password error message
		$passerror = "Your Password Didn't Match";

	//check if username field input is a match
	}elseif($_POST['username'] == $compare['username']){

		//set user error message
		$usererror = "This Username Has Been Taken";

	//check if email field input is a match
	}elseif($_POST['email'] == $compare['email']){

		//set email error message
		$emailerror = "This Email Has Already Been Registered";

	}else{

		//set sql statement to insert all field to database table
		$sql="INSERT INTO user(
				email,
				username,
				password,
				date_created,
				type,
				name,
				user_contact)
			VALUES(
				'$_POST[email]',
				'$_POST[username]',
				'$_POST[password]',
				'$_POST[regdate]',
				'$_POST[type]',
				'$_POST[name]',
				'$_POST[usercontact]')";

			//check if query run
			if(mysqli_query($conn, $sql)){

				//set user session
		      	$_SESSION['user'] = $_POST['username'];

				//redirect to link
				header("Location: regmsg.php");

			}else{

				header("Location: index.php");
				//display sql error message
				echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);

			}

			//close sql quaries
			mysqli_close($conn);
	}

}
?>