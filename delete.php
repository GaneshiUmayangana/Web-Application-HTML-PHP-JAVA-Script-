<?php

session_start();

require_once "./dbconn/data.php";
require_once "./dbconn/connection.php";


$reg_no=$_GET["reg_number"];

$sql="delete from customer_registration where reg_number=$reg_no";
mysqli_query($conn,$sql);


if(mysqli_query($conn,$sql)){
    header("location: login.php");
}
else{
    echo "Error in ".$sql."<br/>".mysqli_error($conn);
}

?>

