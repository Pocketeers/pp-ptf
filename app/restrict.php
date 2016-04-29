<?php
//include external php file
include 'dbcon.php';

//set sql statement to select "type" record from "user" table with user session
$sql = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";

//run sql statement with query
$results = mysqli_query($conn, $sql);

//check if record exist
if(mysqli_num_rows($results) > 0){

    //loop to fetch record
    while($userinfo = mysqli_fetch_array($results)){
      
        //set record as variable
        $type = $userinfo['type'];
    }
}

//check if user session not exist or employee exist
if(!isset($_SESSION['user']) OR ($type == "employee")){

    //redirect to link
    header('Location: index.php');

}else{
    
}
?>