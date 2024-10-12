<?php
// print_r($_GET);
$cid=$_GET['cartid'];

include_once "../shared/connection.php";

$status=mysqli_query($conn,"delete from cart where cartid=$cid");

if($status){
    header("location:viewcart.php");
}
else{
    echo"query failed";
    echo mysqli_error($conn);
}
?>