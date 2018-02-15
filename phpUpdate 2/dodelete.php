<?php

// Connexion au serveur SQL
require_once "connect.php";

// Envoi de la requête de suppression au serveur SQL avec l'ID
$requete = "DELETE FROM 
`article` 
WHERE 

id = :id;";

// Envoi de l'ID a supprimer au serveur
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();

// Redirection Home
header('Location: ../home.php');

?>
