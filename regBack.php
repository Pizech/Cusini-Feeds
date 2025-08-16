<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usersDB";


$sqlObj = new mysqli($servername, $username, $password, $dbname);

if ($sqlObj->connect_error) {
    die("Connection failed: " . $sqlObj->connect_error);
}

$name = $_POST["username"];
$pass = $_POST["password"];


$sqlCheck = "SELECT id FROM users WHERE username = '$name'";
$query = $sqlObj->query($sqlCheck);

if (mysqli_num_rows($query) > 0)
{ 
    $_SESSION['err'] = "User already exists!";
    header("Location: regFront.php");
    exit();
}

$sqlComm = "INSERT INTO users (username, password) VALUES ('$name', '$pass')";
$query = $sqlObj->query($sqlComm);

$sqlObj->close();


header("Location: index.php");
exit();
?>
