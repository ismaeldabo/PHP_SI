<?php

// Verification du contenu du titre, si vide : redirection.

if (!isset($_POST['title'])) {
    header('Location: index.php?nopostdata');
    exit;
}
//Connexion
require_once "connect.php";

// Requête SQL trigg. -> adresse colonnes et valeurs à changer
// trigg = Objet de la BDD, reliés à une table ils permettent de déclancher l'instruction lorsqu'une ou plusieurs lignes
// sont insérées, supprimées ou modifiées de leur table.

$requete = "INSERT INTO `Article` (`title`, `description`, `price`, `image`) VALUES (:title, :description, :price, :image);";

$stmt = $conn->prepare($requete);

// Envoi des données du formulaire récupérées via $_POST

// $stmt (statement)= sécurité injec°

$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':description', $_POST['description']);
$stmt->bindValue(':price', $_POST['price']);
$stmt->bindValue(':image', $_POST['image']);

$stmt->execute();

// redirection à l'index 'lastInsertId()'= Insert le dernier ID du tableau

header("location:index.php?id=".$conn->lastInsertId());
