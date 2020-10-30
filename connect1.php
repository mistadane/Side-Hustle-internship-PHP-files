<?php 

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "sidehustle";


// create connection

$con = mysqli_connect($serverName, $userName, $password, $dbName);

if(mysqli_connect_errno()) {
    echo "Connection Failed";
    exit();
}
echo "Connection Successful";


?>