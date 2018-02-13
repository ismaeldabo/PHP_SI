<?php

if (!isset($_POST['title'])) {
    header('Location: index.php?nopostdata');
    exit;
}

require_once "connect.php";

$requete = "INSERT INTO TEST (title, description, price) VALUES (:title, :description, :price);";

$stmt = $conn->prepare($requete);

$stmt->bindParam(':title', $_POST['title']);
$stmt->bindParam(':description', $_POST['description']);
$stmt->bindParam(':price', $_POST['price']);

$stmt->execute();