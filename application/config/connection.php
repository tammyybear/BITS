
<?php
    $servername = "remotemysql.com:3306";
    $dbusername = "ABy2iSZvrL";
    $dbpassword = "ndYMoNKDIB";
    $dbname = "ABy2iSZvrL";

    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

    if (!$conn) {
        die("connection failed: ".mysqli_connect_error());
    }

?>