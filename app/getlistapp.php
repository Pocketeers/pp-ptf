<?php
include 'dbcon.php';

if($conn){

	$sql = "SELECT * FROM applicant WHERE post_id = $_GET[post_id] ";
	$query = mysqli_query($conn, $sql);

	if(mysqli_num_rows($query) > 0){

		while($appinfo = mysqli_fetch_array($query)){

			if(($appinfo['status'] == "ACCEPTED") OR ($appinfo['status'] == "NOT ACCEPTED")){

				echo 
				"<ul>
				<li>".
				"<a class=\"applink\" href=\"viewapp.php?app_id=".$appinfo['app_id']."\">".
				"<b>Name: </b>".$appinfo['aname'].
				" || ".
				"<b>Have Work Experience: </b>".
				$appinfo['experience'].
				"</a>".
				" || ".
				"<b>Status: </b>".$appinfo['status'].
				"</li>
				</ul>";

			}else{

				echo 
				"<ul>
				<li>".
				"<a class=\"applink\" href=\"viewapp.php?app_id=".$appinfo['app_id']."\">".
				"<b>Name: </b>".$appinfo['aname'].
				" || ".
				"<b>Have Work Experience: </b>".
				$appinfo['experience'].
				"</a>".
				" || ".
				"<b>Status: </b>".$appinfo['status'].
				" <b>-</b> ".
				"<a class='btn btn-primary' href=\" decline.php?app_id=".$appinfo['app_id']." \">Decline</a>".
				" <b>or</b> ".
				"<a class='btn btn-primary' href=\" accept.php?app_id=".$appinfo['app_id']." \">Accept</a>".
				"</li>
				</ul>";

			}

		}

	}else{

		echo "0 Applicant";
	}


}
?>