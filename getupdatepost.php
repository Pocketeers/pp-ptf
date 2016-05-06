<?php
//include external php file
include 'dbcon.php';

//start session
session_start();

//set sql statement to select "type" record from "user" table with user session
$sql1 = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";
    
    //run sql statement with query
    $results1 = mysqli_query($conn, $sql1);

    //check if record exist
    if(mysqli_num_rows($results1) > 0){

        //fetch records
        $userinfo = mysqli_fetch_array($results1);

        //set record as variable
        $type = $userinfo['type'];

        
    }

//check if user session not exist or user session as employee exist
if(!isset($_SESSION['user']) OR ($type == "employee")){
    //redirect to link
    header('Location: index.php');
}

//check if submitBtn is not clicked
if(!isset($_POST['submitBtn'])){

    //set sql statement to select all record from "posts" table with user session
    $get_id = "SELECT company_id FROM posts WHERE post_id= $_GET[post_id]";

    if($check_id=mysqli_query($conn, $get_id)){

        $company_id=mysqli_fetch_array($check_id);

    }else{

        //display echo error
        echo "Error: ". "<br>" . mysqli_error($conn);
    }

    //set sql statement to select all record from "posts" table with user session
    $sql = "SELECT * FROM posts INNER JOIN company ON company.company_id=posts.company_id WHERE post_id= $_GET[post_id]";

        //check if query run
        if($result=mysqli_query($conn, $sql)){

            //loop to fetch records
            $postinfo=mysqli_fetch_array($result);

            //check if post-id exist
            if($_GET['post_id'] == 0){

                //redirect to link
                header('Location: index.php');
            }

        }else{
            echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
        }
}

//check if submitBtn is clicked
if(isset($_POST['submitBtn'])){

//escaped field input
$_POST['work']=mysqli_real_escape_string($conn, $_POST['work']);
$_POST['scope']=mysqli_real_escape_string($conn, $_POST['scope']);
$_POST['addinfo']=mysqli_real_escape_string($conn, $_POST['addinfo']);

$_POST['company_name']=mysqli_real_escape_string($conn, $_POST['company_name']);
$_POST['company_address']=mysqli_real_escape_string($conn, $_POST['company_address']);
$_POST['city']=mysqli_real_escape_string($conn, $_POST['city']);
$_POST['postcode']=mysqli_real_escape_string($conn, $_POST['postcode']);
$_POST['company_info']=mysqli_real_escape_string($conn, $_POST['company_info']);

    //set sql statement to update all record from "posts" table
    $update="UPDATE posts SET 
        `work`='$_POST[work]',
        `salary`='$_POST[salary]',
        `salary_rate`='$_POST[salary_rate]',
        `scope`='$_POST[scope]',
        `addinfo`='$_POST[addinfo]',
        `jobcat`='$_POST[jobcat]' WHERE post_id='$_POST[post_id]'";

        //check if query run
         if(mysqli_query($conn, $update)){

            //set sql statement to update all record from "posts" table
        $update_company="UPDATE company SET 
            `company_name`='$_POST[company_name]',
            `company_address`='$_POST[company_address]',
            `city`='$_POST[city]',
            `state`='$_POST[state]',
            `postcode`='$_POST[postcode]',
            `company_info`='$_POST[company_info]' WHERE company_id='$_POST[company_id]'";

                //check if query run
                if(mysqli_query($conn, $update_company)){

                    //redirect to link
                    header('Location: myads.php');

                }else{

                    //display echo error
                    echo "Error: ". "<br>" . mysqli_error($conn);
                }

         }else{

            //display echo error
            echo "Error: ". "<br>" . $update . "<br>" . mysqli_error($conn);
         }
}
?>