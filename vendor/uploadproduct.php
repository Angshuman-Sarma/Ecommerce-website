<?php
include_once "vauthguard.php";
include_once "vnavbar.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register yourself</title>
    <style>

.bod {
    display: flex;
    justify-content: center;
    align-items: center;

    margin: 0;
    width: 100vw;
    font-family: sans-serif;
    background-color: #f2f2f2;
    height: 90vh;
}


.container {
    background-color: #fff;
    width: 380px;
    /* margin: 50px auto; */
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
}

textarea{
    width: 100%;
    height: 100px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
    resize:none;
}

button[type="submit"] {
    background-color: #4CAF50;
    /* Green */
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    width: 100%;
}

button[type="submit"]:hover {
    background-color: #45a049;
    /* Darker green on hover */
}
.radi{
    display: flex;
    /* justify-content: center; */
    align-items: flex-start;
}

    </style>
   
</head>
<body>
    <div class="bod">
    <div class="container"> 
        <h2>Enter your product details here</h2>
        <form enctype="multipart/form-data" action="upload.php" method="POST">
            <div class="input-group">
              
                <input required type="text" name='pdtname' placeholder="Enter product name">
            </div>
            <div class="input-group">
                
                <input required type="text" name='pdtprice' placeholder="Enter product price">
            </div>
            <div class="input-group">
        
                <textarea required name="pdtdetail" cols='30' row="5" placeholder="Enter product details here"></textarea>
            </div>
            <div class="input-group">
        
                <input type="file" name='pdtimg' accept=".jpg">
            </div>

            <button type="submit">Upload</button>
        </form>
    </div>
    </div>
</body>
</html>
