<?php session_start();
$_SESSION['login'] = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cusini Feeds</title>
</head>
<body>
    <div><h1>Cusini Feeds</h1></div>
    <h2>Welcome to our platform, post, read, and have fun!</h1>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <?php
    if (isset($_SESSION['err']))
    {echo $_SESSION['err'];}
    $_SESSION['err'] = null;
    ?>
    <div>Don't have an account yet?<a href="regFront.php"> Sign up</a></div>
</body>
</html>
