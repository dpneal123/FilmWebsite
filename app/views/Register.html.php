<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
<?php include '../mysqli_connect.php' ?>
<center>
    <h3>Register</h3>
    <form action="../controllers/Register.php" method="post">
        <p>Name <input type="text" name="name"></p>
        <p>Mobile <input type="tel" name="phone"></p>
        <p>Email <input type="email" name="email"></p>
        <p>Postcode <input type="text" name="postcode"></p>
        <p>House <select name="house"> </select></p>
        <p>Password <input type="password" name="password"></p>
        <input type="submit" name="submit" value="Submit">
    </form>
</center>
</body>
</html>