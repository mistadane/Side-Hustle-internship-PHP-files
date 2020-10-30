<?php 

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "sidehustle";


// create connection
/*
try{
    $con = new PDO ("mysql:host=$serverName;dbname=$dbName" , $userName , $password);

    $con -> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Successful!";
}

catch (PDOException $e){
    echo "Error in Connection".$e ->getMessage();
}
*/

try {
    $handle = new PDO("mysql:host=$serverName;dbname=$dbName", "$userName", "$password");
    $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected";
} catch(PDOException $e) {
    die("Coonection Failed");
}

?>