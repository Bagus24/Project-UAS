<?php

$host = "localhost";
$db_name = "id4928317_db_praktek";
$username = "id4928317_root";
$password = "bagus12345";
  
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>