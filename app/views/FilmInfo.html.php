<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
include '../mysqli_connect.php';

$filmid = $_GET['filmid'];

$sql = 'SELECT * FROM `fss_Film` WHERE filmid='. $filmid;
$result = $dbc->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row1 = $result->fetch_assoc()) {
        echo "<center><p>" . $row1['filmtitle'] . "<br><br>" . $row1['filmdescription'] . "<br><br>" . $row1['ratid'] . "</p>";
    }
} else {
    echo "0 results";
}

?>

<p><a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Go back</a></p>

</center>

</body>
</html>