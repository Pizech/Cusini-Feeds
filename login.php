<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usersDB";
session_start();

$sqlObj = new mysqli($servername, $username, $password, $dbname);

if ($sqlObj->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["username"];
$pass = $_POST["password"];

$sqlCheck = "SELECT * FROM users WHERE username = '$name'";
$query = $sqlObj->query($sqlCheck);
$arr = $query->fetch_assoc();

if (!$arr)
{ 
    $_SESSION['err'] = "User doesn't exist!";
    header("Location: index.php");
    exit();
}

$id = $arr['id'];

if ($pass == $arr['password'])
{
    $_SESSION['login'] = 1;
    $_SESSION['id'] = $id;
    $sqlObj->close();
    header("Location: home.php");
    exit();
}
else
{
    $_SESSION['err'] = "Password is not correct!";
    $sqlObj->close();
    header("Location: index.php");
    exit();
}

