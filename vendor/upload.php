<?php
include_once "vauthguard.php";

print_r($uid);

print_r($_FILES);

$file_name=$_FILES['pdtimg']['name'];
$file_path='../shared/images/'.$file_name;

move_uploaded_file($_FILES['pdtimg']['tmp_name'],$file_path);

$pname=$_POST['pdtname'];
$pprice=$_POST['pdtprice'];
$pdetail=$_POST['pdtdetail'];

include_once "../shared/connection.php";

$status=mysqli_query($conn,"insert into product (product_name,price,detail,imgpath,uploaded_by) values('$pname',$pprice,'$pdetail','$file_path',$uid)");
if($status){
    header("location:view.php");
    echo "values inserted successfully";
}
else{
    echo "query failed";
    echo mysqli_error($conn);
}
?>