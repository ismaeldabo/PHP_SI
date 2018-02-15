<?php
/**
 * Created by PhpStorm.
 * User: ismaelhetic
 * Date: 15/02/2018
 * Time: 08:57
 */


if (!isset($_POST['id'])) {
    header('Location: index.php?error=nopostdatadelete');
    exit;
}
require_once "connect.php";
$requete = "DELETE FROM 
`Articles` 
WHERE 
id = :id;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: index.php');

?>