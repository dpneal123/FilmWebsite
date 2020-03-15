<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
</head>
<body>
<?php include '../mysqli_connect.php' ?>
<center>
    <h3>Log In</h3>
    <form action="../controllers/Login.php" method="post">
    <p>Email <input type="email" name="email"></p>
    <p>Password <input type="password" name="password"></p>
    <input type="submit" name="submit" value="Submit">
</form>
</center>
</body>
</html>