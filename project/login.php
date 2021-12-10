<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    height: 30%;
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
</style>
<body>

<div class="alligh">

  <div class="box">
    

<?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
    echo ("error in connecting");
        

      }
    else {
    
        
            $username=$_REQUEST['username'];
            $password=$_REQUEST['password'];
            
            $sql="SELECT username,passwords FROM login_cred where username='$username' and passwords='$password';";
            $result = $conn->query($sql);
            // echo "sign me a gaya sheeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeesh";
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                //   echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                    if(strcmp($row["username"],$username)!=0){
                        echo "invalid username";
                    }
                    else if(strcmp($row["passwords"],$password)!=0){
                      echo "invalid password";
                  }
                  else{
                    echo "<center class='text'>WELCOME TO OUR WEBSITE $username</center>";
                    break;
                  }
                }
              } else {
                echo "id NOT found";
              }
        
    }

    echo "<button class=' text '><a class='text2' href='index.html'>HOME</a></button>";

?>
  </div>
</div>
</body>
</html>


