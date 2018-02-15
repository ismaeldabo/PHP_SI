<?php

require "connect.php";
$sql = "UPDATE
      `Article`
SET
   `title` = :title,
   `description` = :description,
   `price` = :price,
   `image` = :image
WHERE
   id = :id
;";
/** @var $stmt */
$stmt = $conn->prepare($sql);
//on réattribue toutes les valeurs avec le bind value
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':description', $_POST['description']);
$stmt->bindValue(':price', $_POST['price']);
$stmt->bindValue(':image', $_POST['image']);
$stmt->execute();
// A la fin on l'éxecute

header('Location: ../index.php?id='.$conn->lastInsertId());
// nous revenons vers index.php avec le projet que nous avons éditer

