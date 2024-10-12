<?php

    $pid=$_GET['pid'];

    include_once "../shared/connection.php";

    $status=mysqli_query($conn,"delete from orders where product_id=$pid");

    if($status){
        header("location:vieworders.php");
    }
?>