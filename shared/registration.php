<?php
    print_r($_POST);

    $uname=$_POST['uname'];
    $upass=$_POST['upass'];
    $utype=$_POST['utype'];

    $encypt=md5($upass);

    include_once "connection.php";

    $result=mysqli_query($conn,"insert into register(username,password,usertype) values('$uname','$encypt','$utype')");

    if($result){
        header("location:login.html");
        echo"values inserted successfully";
    }
    else{
        echo"querry failed";
        echo mysqli_error($conn);
    }

?>