<?php
require_once "connect.php";
require "header.php";
$requete = "SELECT
        `id`,
        `title`,
        `description`,
        `price`,
        `image`
  FROM
    `Article`
  WHERE
    id = :id
;";
$stmt = $conn->prepare($requete);


$stmt->bindValue(":id", $_GET["id"]);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>

<form action="dodelete.php" method="post">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <label for="">Êtes vous sûr de vouloir supprimer ? <?=$row['nom']?></label><br>
    <input type="submit" value="oui">
</form>
