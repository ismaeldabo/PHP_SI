<?php

require_once "connect.php";
$requete = "DELETE FROM 
`article` 
WHERE 

id = :id;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();


header('Location: ../home.php');

?>


