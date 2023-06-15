<?php

$conn = mysqli_connect('localhost', 'root', '', 'tcsc');
if($conn->connect_error){
    echo "Failed to connect to MySQL: ".$con->connect_error;
    exit();
}


$username = $_POST['username'];
$password = $_POST['password'];
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

$sql = "SELECT * FROM `loing` WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 
    session_start();
$_SESSION['loggedin'] = true;


header('Location: details.php'); 
exit;
} else {
echo 'Incorrect username or password. Please try again.';
}

mysqli_close($conn);
?>