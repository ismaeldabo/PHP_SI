<?php
$username = 'root';
$password = 'root';

try {
    $conn = new PDO('mysql:host=localhost;dbname=Data','root', 'Vinre');
} catch (PDOException $exception) {
    die("Erreur");
}
echo "hello2";