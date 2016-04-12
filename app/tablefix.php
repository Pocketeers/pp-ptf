<?php
include 'dbcon.php';

$sql="describe applicant";

$query=mysqli_query($conn,$sql);

if(mysqli_num_rows($query) > 0){
	while($row = mysqli_fetch_assoc($query)){
		print_r($row);
	}
}else{
    echo "no luck :(";
}

?>