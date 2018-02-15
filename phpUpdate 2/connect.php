<?php
//$username = 'root';
//$password = 'root';


// Connexion via PDO
try {
    $conn = new PDO('mysql:host=localhost;dbname=Data','root', 'root');
} catch (PDOException $exception) {
    die("Erreur");
}