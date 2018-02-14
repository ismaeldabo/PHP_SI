<?php
if (!isset($_POST['title'])) {
    header('Location: index.php?nopostdata');
    exit;
}

require_once "connect.php";

$requete = "INSERT INTO `Article` (`title`, `description`, `price`) VALUES (:title, :description, :price);";

$stmt = $conn->prepare($requete);

$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':description', $_POST['description']);
$stmt->bindValue(':price', $_POST['price']);

$stmt->execute();

header("location:index.php?id=".$conn->lastInsertId());
