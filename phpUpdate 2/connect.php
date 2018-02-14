<?php
$username = 'root';
$password = 'root';

try {
    $conn = new PDO('mysql:host=localhost;dbname=Data','root', 'root');
} catch (PDOException $exception) {
    die("Erreur");
}