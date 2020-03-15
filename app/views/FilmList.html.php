<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Browse Films</title>
    <link type="text/css" rel="stylesheet" href="styles.css"/>
</head>
<body>
<?php include '../mysqli_connect.php' ?>
<div>
    <center>
        <?php getFilms(); ?>
    </center>
</div>

</body>
</html>