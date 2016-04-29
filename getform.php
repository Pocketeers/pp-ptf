<?php
//include external php file
include'dbcon.php';

//set sql statement to select "type" record from "user" table with user session
$check = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";

//run sql statement with query
$confirm = mysqli_query($conn, $check);

//check if record exist
if(mysqli_num_rows($confirm) > 0){

    //loop to fetch record
    while($user = mysqli_fetch_array($confirm)){
      
        //set record as variable
        $type = $user['type'];
    }
}

//check if user session not exist or employee exist
if($type == "employer"){

    //redirect to link
    header('Location: index.php');

}else{
    
}


 //set sql statement to select all record with selected id
 $sql = "SELECT * FROM posts WHERE post_id= $_GET[post_id]";

    //check if query is running
    if($result=mysqli_query($conn, $sql)){

        //set feth record as variable
        $postinfo=mysqli_fetch_array($result);
        
        //set user_id
        $postinfo['user_id'];

        //set post id
        $postinfo['post_id'];

        
        //set sql statement to select email record with selected user_id
        $sql1 = "SELECT email FROM user WHERE user_id= '$postinfo[user_id]' ";
        $result1 = mysqli_query($conn, $sql1);
        $userinfo1 = mysqli_fetch_array($result1);
        $userinfo1['email'];

        //set sql statement to select email record with selected session
        $sql2 = "SELECT email FROM user WHERE username= '$_SESSION[user]' ";
        $result2 = mysqli_query($conn, $sql2);
        $userinfo2 = mysqli_fetch_array($result2);
        $userinfo2['email'];

    }else{

        echo "Error";
    }
?>