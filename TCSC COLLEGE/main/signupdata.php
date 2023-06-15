<?php
$con = new mysqli("localhost", "root", "", "tcsc");
if ($con->connect_error) {
    echo "Failed to connect to MySQL: " . $con->connect_error;
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];
   
$sql = " INSERT INTO `loing` (`username`, `password`) VALUES ('$username','$password')";

if ($con->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}    
?>