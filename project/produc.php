<!DOCTYPE html>
<html>
  
<head>
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
    </center>
</body> 
</html>