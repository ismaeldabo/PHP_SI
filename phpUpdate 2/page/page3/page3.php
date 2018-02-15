<?php


require_once "../../connect.php";
$requete = "SELECT
        `id`
  FROM
    `Article`
  WHERE
    `id` = :id
;";
$stmt = $conn->prepare($requete);

$stmt->bindValue(":id", $_POST["id"]);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>

<html>
<header>
    <link rel="stylesheet" href="css/styleSignUp.css">
    <link rel="stylesheet" href="css/reset.css">
</header>

<div class="tabs">

    <nav>
        <form class="header-container-icons-account" action="../page1/page1.php">
            <input type="hidden" value=" <?=$row['id'] ?> ">
            <input type="submit" name="submit" value="ADD" class="Yes">
        </form>
        <form class="header-container-icons-account" action="../page2/page2.php">
            <input type="hidden" value=" <?=$row['id'] ?> ">
            <input type="submit" name="submit" value="EDIT" class="Yes">
        </form>
        <form class="header-container-icons-account" action="../page3/page3.php">
            <input type="hidden" value=" <?=$row['id'] ?>" placeholder="Project you want to delete">
            <input type="submit" name="submit" value="REMOVE" class="Yes">
        </form>
    </nav>

    <div class="tabs-contents">
        <article id= class="tabs-content"><div class="main-wrapper"></div></article>
        <article id= class="tabs-content"><div class="main-wrapper"></div></article>
        <article class="tabs-content is-active">
            <form action="../../dodelete.php" method="post">
                <input type="text" name="id" value="<?=$row['id']?>">
                <label for="">Êtes vous sûr de vouloir supprimer ?</label><br>
                <input type="submit" value="oui">
            </form>
        </article>

    </div>
</div>
</html>
