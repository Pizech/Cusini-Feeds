<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usersDB";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $sqlObj = new mysqli($servername, $username, $password, $dbname);
    if ($sqlObj->connect_error) {
        die("Connection failed: " . $sqlObj->connect_error);
    }
    $sqlName = "SELECT username FROM users WHERE id = '" . $_SESSION['id'] . "'";
    //$sqlpfp = "SELECT * FROM users WHERE username = '$pfp'";
    $query = $sqlObj->query($sqlName);
    $arr = $query->fetch_assoc();
    $name =  $arr['username'];
    ?>
    <img src = "Images/default2.png" length=70px width=70px>
    <h1><?php echo "$name"?></h1>
    <button id="logout" onclick="window.location.href='index.php'">Log out</button>
    <hr>



</body>
</html>