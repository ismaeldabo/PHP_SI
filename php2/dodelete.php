<?php
        // Vérification de l'ID à supprimer
    if (!isset($_POST['id'])) {
        header("Location: index.php?error=noidtodelete");
        exit;
    }
        // Connexion au serveur
    require_once "connexion.php";

        // Code SQL de suppression
    $sql = "DELETE FROM 
      `article` 
    WHERE 
      `id` = :id
    ;";
    // stmt = variables sécurisées contre les injections SQL
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();
    errorHandler($stmt);
    header("Location: index.php");
?>