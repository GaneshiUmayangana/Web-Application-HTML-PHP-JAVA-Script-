<?php

require_once "data.php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die ("Error " . mysqli_connect_error());
}
echo "Connected Successfully";
 ?>
