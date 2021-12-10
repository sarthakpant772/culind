<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>

<style>

body{
    width:100%;
    height:100vh;
    display:flex;
    justify-content:center;
    background-color: rgb(52, 107, 73);
}

.alligh{
    align-items:center;
    align-self: center;
}

.box{
    width: 80%;
    height: 50%;
    align-items: center;
    flex-direction: column;

}
.text{
    
    font-size: xx-large;
    color: #f2f2f2;
    color: wheat;
    text-align: center;
    text-decoration: none;
  
}

.text2{
  font-size:large;
  
}

.errrors{
  color:red;
}
</style>
<body>

<div class="alligh">

  <div class="box">
    

  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn= new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
      echo("connection failed\n");
    }




    $name = ($_REQUEST["username"]);
    $password = ($_REQUEST["password"]);
    $num="";
  
      $sql="SELECT username FROM login_cred where username='$name';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0){
          echo "<a class='text errrors '>USERNAME ALREADY TAKEN!!!!!</a>";
      }
      else{
      $sql="INSERT INTO login_cred (username,passwords) values ('$name','$password')";

      if ($conn->query($sql) === TRUE) {
        echo "<a class='text'>New record created successfully</a>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
    echo "<br><button class=' text '><a class='text2' href='index.html'>HOME</a></button>";
    $conn->close();
    ?>

   
  </div>
</div>
</body>
</html>




