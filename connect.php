<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=localhost;dbname=TEST", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>