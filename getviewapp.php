<?php
include 'dbcon.php';

session_start();

    //set sql statement to select "type" record from "user" table
    $sql1 = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";

    //run sql statement using query
    $results1 = mysqli_query($conn, $sql1);

    //check if table record exist
    if(mysqli_num_rows($results1) > 0){

    //loop to fetch all "type" record
    while($userinfo = mysqli_fetch_array($results1)){

        //set as variable
        $type = $userinfo['type'];

        }
    }
    
    //set sql statement to select all record from "posts" table with selected "id"
    $sql = "SELECT * FROM applicant WHERE app_id= $_GET[app_id]";

    //check if query can run
    if($result=mysqli_query($conn, $sql)){

        //set fetch record as variable
        $appinfo=mysqli_fetch_array($result);

        //check if session or employee exist
        if((!isset($_SESSION['user'])) OR ($type == "employee")){
            
           

        }else{

            $apply = "<td colspan='2'></td>";
        }

    }else{

        echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
    }
?>
