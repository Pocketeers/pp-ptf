<?php
//include external php file
include 'dbcon.php';

    //set sql statement select all record form "posts" table with selected id
    $sql = "SELECT * FROM INNER JOIN company ON company.company_id=posts.company_id posts WHERE post_id = $_GET[post_id]";
    
    //check if query run
    if($result=mysqli_query($conn, $sql)){
        //fetch record
        $postinfo=mysqli_fetch_array($result);

    }else{

        header("Location: index.php");
        echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
    }
?>