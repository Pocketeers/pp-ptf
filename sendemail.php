<?php
//include external php file
include 'dbcon.php';

//start user session
session_start();

//set sql statement to select "type" record from "user" table with user session
$check = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";

//run sql statement with query
if($confirm = mysqli_query($conn, $check)){

	//check if record exist
	if(mysqli_num_rows($confirm) > 0){

	    //loop to fetch record
	    while($user = mysqli_fetch_array($confirm)){
	      
	        //set record as variable
	        $type = $user['type'];

	        if($type == "employer"){

	        	header("Location: index.php");
	        }
	    }
	}

}else{

}


require_once('./vendor/autoload.php');
use Postmark\PostmarkClient;
use Postmark\Models\PostmarkException;
use Postmark\Models\PostmarkAttachment;

		try{

		// Example request
		$client = new PostmarkClient("f5662a2d-8885-4cd1-b0b2-65b084216b3a");

		//$_FILES[file][name][type][size]

		$attachment = PostmarkAttachment::fromFile(dirname(__FILE__) .  '/resume.txt', "Resume.txt", "text/plain");

		$sendResult = $client->sendEmail(
		  "farid@pocketpixel.com",
		  $_POST['tosend'],
		  "You Have a Request (No Reply)",
		  "* You have a job application request from:"."<br><br><br>".
			"Name: ".$_POST['aname']."<br><br>".
			"Age: " .$_POST['age']."<br><br>".
			"Have Work Experience: ".$_POST['experience']."<br><br>".
			"Experience About Previous Jobs: ".$_POST['area']."<br><br>".
			"Contact: ".$_POST['contact']."<br><br>".
			"Email: ".$_POST['email']."<br><br>".
			"(Attachments is provided within the email)"."<br><br>",
			"Attachement body",
		    NULL, true, NULL, NULL, NULL, NULL, [$attachment]
		);

		}catch(PostmarkException $ex){
	    // If client is able to communicate with the API in a timely fashion,
	    // but the message data is invalid, or there's a server error,
	    // a PostmarkException can be thrown.
	    echo $ex->httpStatusCode;
	    echo $ex->message;
	    echo $ex->postmarkApiErrorCode;

		}catch(Exception $generalException){
		    // A general exception is thown if the API
		    // was unreachable or times out.
		}

		if($sendResult){

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

				header("Location: sent.php");

			}else{

				echo "Not Successful";
			}

		}else{

			echo "fail";
		}

?>