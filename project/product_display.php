<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product_display.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <a href="index.html" class="buttons">Home</a>
        <a href="index.html" class="buttons">Home</a>
        <a href="index.html" class="buttons">Home</a>
        <a href="index.html" class="buttons">Home</a>
    </div>

    <center><h1 class="headding">BUY PRODUCTS</h1><hr style="color:white; width:50%"></center>    

 
    </div>
    <div class='page'>
        <?php
        
            
            $con = new mysqli("localhost", "root", "", "test");
            if ($con->connect_error) {
                echo "connection Failed: " . $con->connect_error;
            } else {
            // $ser=$_REQUEST["search"];
          
            $sql = "SELECT product_price  , product_dis,	product_name FROM prod_details;";

                $result = $con->query($sql);
                // if ($result->num_rows > 0){
                //     echo "data not found";
                // }
                // else{
                while ($row = $result->fetch_assoc()) {
                    // echo  "<div class=\"wrong\"><?php echo $product_price"; 

                    echo "
                        <div class='card'>
                        <center> <h1 class='headding'>" .$row['product_name']."</h1><hr></center>
                        <center><p class='details'>".$row['product_dis']."</p></center>
                         <div class='price_line'><p class='price'>".$row['product_price']."$</p><a class='price buto' href='https://www.youtube.com/watch?v=d1YBv2mWll0'>BUY</a></div>

                         </div>
                    ";
                    // echo $row['product_name'] . "<br>";
                    // echo $row['product_price'] . "<br>";
                }
            // }
        }   
        
        ?>
    </div>
</body>
</html>

 


