<?php

    include_once "cauthguard.php";
    include_once "../shared/connection.php";

    $result=mysqli_query($conn,"select * from cart join product on cart.productid=product.pid where cart.userid=$uid");
   

   while($row=mysqli_fetch_assoc($result)){
   
    $product_id=$row['pid'];
    $seller_id=$row['uploaded_by'];
    $buy_price=$row['price'];
    $product_name=$row['product_name'];
    $imgpath=$row['imgpath'];

    $status=mysqli_query($conn,"insert into orders(product_id, user_id, seller_id, product_name, buy_price, imgpath) values($product_id, $uid, $seller_id, '$product_name',$buy_price,'$imgpath')");
}

if($status){
    $stat=mysqli_query($conn,"delete from cart where userid=$uid");
    header("location:vieworders.php");
    echo"values successfully added";
}
else{
    echo"querry failed";
    echo mysqli_error($conn);
}

?>