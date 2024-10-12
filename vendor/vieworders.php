
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
  .bod{
    width: 100vw;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
        .card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.card {
  margin: 20px;
  width: 250px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
}

.card img {
  width: 100%;
  height: 150px;
  object-fit: cover;
  border-radius: 10px;
}

.card h2 {
  margin-top: 0;
}

.card p {
  margin-bottom: 20px;
}

.card button {
  background-color: red;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

.card button:hover {
  background-color: rgb(138, 14, 14);
}
    </style>
</head>
<body>
    
</body>
</html>
<?php
    include_once "vauthguard.php";
    include_once "vnavbar.html";


    include_once "../shared/connection.php";

    $result=mysqli_query($conn,"select * from orders where seller_id=$uid");

    echo "<div class= 'bod'>";
    while($row=mysqli_fetch_assoc($result))
        {
            $pid=$row['product_id'];
            $pname=$row['product_name'];
            $pprice=$row['buy_price'];
           
            $pimg=$row['imgpath'];

            
        
            echo" <div class='card-container'>
            <div class='card'>
              <img src='$pimg' alt='Image 1'>
              <h2> $pname </h2>
              <h2> Rs $pprice </h2>
              <p></p>
              <a href=deleteorders.php?pid=$pid> <button>Mark as delivered</button></a>
            </div>
          </div>";
    }
    echo "</div>";
    
?>