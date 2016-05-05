<?php
//include external php file
include 'dbcon.php';
//start user session
session_start();
include 'restrict.php';

if($conn){
	//declare $_POST['variable'] as variable that can escape inputed values
	$_POST['employer']=mysqli_real_escape_string($conn, $_POST['employer']);
	$_POST['location']=mysqli_real_escape_string($conn, $_POST['location']);
	$_POST['city']=mysqli_real_escape_string($conn, $_POST['city']);
	$_POST['state']=mysqli_real_escape_string($conn, $_POST['state']);
	$_POST['country']=mysqli_real_escape_string($conn, $_POST['country']);
	$_POST['companyinfo']=mysqli_real_escape_string($conn, $_POST['companyinfo']);

	//insert data to table "company"
	$sql="INSERT INTO company(
		company_name,
		company_address,
		city,
		state,
		postcode,
		country,
		company_info,
		user_id) 
	VALUES(
		'$_POST[employer]',
		'$_POST[company_address]',
		'$_POST[city]',
		'$_POST[state]',
		'$_POST[postcode]',
		'$_POST[country]',
		'$_POST[company_info]',
		'$_POST[user_id]')";

	//check if query run
	if(mysqli_query($conn, $sql)){

		//set sql statement to select companyid record from "company" table with user_id
	  $sql1="SELECT company_id FROM company WHERE user_id = '$_POST[user_id]' ";

	  //run sql statement with query
	  $results1=mysqli_query($conn, $sql1);

	    //check if record exist
	    if(mysqli_num_rows($results1) > 0){

	        //fetch record
	        $companyid=mysqli_fetch_array($results1); 

	        //set record as variable
	        $companyid = $companyid['company_id'];

	    }else{

	      echo"Error";
	    }
		
	}else{

		header("Refresh:5; Location: index.php");
	echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
	}


}
?>