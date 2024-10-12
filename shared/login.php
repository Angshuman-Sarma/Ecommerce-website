<?php

// print_r($_POST);

session_start();
$_SESSION['login_status'] = false;

$uname=$_POST['uname'];
$upass=$_POST['upass'];

$dcrpt=md5($upass);

include_once "connection.php";

$result=mysqli_query($conn,"select * from register where username='$uname' and password='$dcrpt'");

    $row_count=mysqli_num_rows($result);

    
    if($row_count==0){
        echo"Entered credientials did not match";
        die;
    }
    else{
        $_SESSION['login_status'] = true;

        $row=mysqli_fetch_assoc($result);

            $_SESSION['uid']=$row['userid'];
            $_SESSION['uname']=$row['username'];
            $_SESSION['upass']=$row['password'];
            $_SESSION['utype']=$row['usertype'];
        
        if($row['usertype']=='customer')
        {
            header("location:../customer/chome.php");
        }
        else if($row['usertype']=='vendor')
        {
            header("location:../vendor/vhome.php");
        }


    }

?>