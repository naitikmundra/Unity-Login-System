<?php
$servername = "localhost";
$username = "id18636318_progbitunitytut";
$password = "Naitik@#1234";
$dbname = "id18636318_progbitslogin";
//login vars
$loginUser = $_POST["loginUser"];
$loginPass = $_POST["loginPass"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT money, password FROM users WHERE username = '" .$loginUser ."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if ($row["password"] == $loginPass){
        echo $row["money"];
    }
    else{
        echo "Invalid Credentials";
    }
    
    }
    }
  
 else {
  echo "Invalid Credentials";
}
$conn->close();
?>