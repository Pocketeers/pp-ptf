<?php

require_once('./vendor/autoload.php');
use Postmark\PostmarkClient;

try{
	// Example request
	$client = new PostmarkClient("f5662a2d-8885-4cd1-b0b2-65b084216b3a");

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
		"(Attachments is provided within the email)"
	);

	if($sendResult){

		echo "sucess";
	}else{

		echo "fail";
	}

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
?>