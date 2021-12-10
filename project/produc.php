<!DOCTYPE html>
<html>
  
<head>
<link rel="stylesheet" href="product_input.css">

    <title>Product</title>
</head>
  
<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "test");
          
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        $product_name =  $_REQUEST['product_name'];
        $product_price = $_REQUEST['product_price'];
        $product_dis =  $_REQUEST['product_dis'];
        $product_location = $_REQUEST['product_location'];
          
        $sql = "INSERT INTO prod_details VALUES ('$product_name','$product_price','$product_dis','$product_location')";
          
        if(mysqli_query($conn, $sql)){
            // echo "<h3>Data stored successfully</h3>"; 
        } 
          
        mysqli_close($conn);
        ?>

    <div class="page">
        <div class="errorblock">
            <p class="text">To confirm your input</p>
            <a href="index.html" class="text">Click here</a>
        </div>
    </div>
    </center>
</body> 
</html>