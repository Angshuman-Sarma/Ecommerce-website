<?php
    include_once "cauthguard.php";

    print_r($uid);
    $pid=$_GET['pid'];

    include_once "../shared/connection.php";

    $status=mysqli_query($conn,"insert into cart(userid,productid) values($uid,$pid)");

    if($status){
        header("location:viewcart.php");
        echo"values inserted successfully";
    }
    else{
        echo "querry failed";
        echo mysqli_error($conn);
    }
?>