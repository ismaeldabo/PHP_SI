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
$stmt = $conn->prepare($sql);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':description', $_POST['description']);
$stmt->bindValue(':price', $_POST['price']);
$stmt->bindValue(':image', $_POST['image']);
$stmt->execute();
header('Location: ../index.php?id='.$conn->lastInsertId());

