<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cusini Feeds</title>
</head>
<body>
    <h1>Cusini Feeds</h1>
    <h2>Welcome to our platform, post, read, and have fun!</h1>
    <form action="regBack.php" method="post">
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
    <div>Already have an account?<a href="index.php"> Sign in</a></div>
</body>
</html>