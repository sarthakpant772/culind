<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  echo("connection failed\n");
}

// $sql="CREATE table login_cred (
//   username varchar(100),
//   passwords varchar(100)
// );";

// if (mysqli_query($conn,$sql))
// {
// echo "Table persons created successfully";
// }
// else
// {
// echo "Error creating table: " . mysqli_error();
// }


$conn->close();
?>