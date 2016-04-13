<?php
include 'dbcon.php';

$sql="ALTER TABLE applicant add column exp_details varchar(2000)";

$query=mysqli_query($conn,$sql);

if($query){
	echo "changes has been made :) <br>";

	$sql1="describe applicant";
	$query1=mysqli_query($conn,$sql1);

	if(mysqli_num_rows($query1) > 0){

		while($row = mysqli_fetch_assoc($query1)){
			print_r($row);
		}
	}

}else{
    echo "no luck :(";
}

?>