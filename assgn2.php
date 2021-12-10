<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="Search" name="search">
        <button type="submit" name="submit">Search</button>
    </form>
</body>

</html>
<?php


if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "products");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
       $ser=$_REQUEST["search"];
      $sql = "SELECT product_price  , product_dis,	product_name FROM prod_details WHERE product_location='$ser';";

        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
            // echo  "<div class=\"wrong\"><?php echo $product_price"; 
            echo $row['product_name'] . "<br>";
            echo $row['product_price'] . "<br>";
        }

      
    }   
}



?>