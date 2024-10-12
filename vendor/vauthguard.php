<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .pare{
        color: blue;
        display: flex;
        justify-content: space-around;
    }
</style>
</head>
<body>
    
</body>
</html>
<?php

session_start();
if(!isset($_SESSION['login_status'])){
    echo "Unauthorized access detected";
    die;
}
if($_SESSION['login_status']==false){
    echo"login first";
}

if($_SESSION['utype']!='vendor'){
    echo"Unauthorized usertype detected";
    die;
}

    $uid=$_SESSION['uid'];
    $uname=$_SESSION['uname'];
    $utype=$_SESSION['utype'];

    echo"<div class='pare'>
        <div>$uid</div>
        <div>$uname</div>
        <div>$utype</div>
    
    </div>";
?>