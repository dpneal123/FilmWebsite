<?php

// use in dev mode
error_reporting(E_ALL);

define('BASE_PATH', dirname(realpath(__FILE__)));
define('APP_PATH', BASE_PATH . '/app');

include BASE_PATH.'/app/views/FilmList.html.php';

function getFilms() {
    include './app/mysqli_connect.php';

    $sql = "SELECT * FROM `fss_Film`";
    $result = $dbc->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<a href='./app/views/FilmInfo.html.php?filmid=" . $row['filmid'] . "'>" . $row["filmtitle"]. " " . "<br></link>";
        }
    } else {
        echo "0 results";
    }
}