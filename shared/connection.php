<?php

    $conn=new mysqli('localhost','root', '', 'ecomproj');

    if($conn->connect_error ){
        echo "Error in connection";
        die;
    }
    // else{
    //     echo "Connection Success";
    // }

?>