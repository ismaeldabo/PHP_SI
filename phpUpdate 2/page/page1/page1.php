<?php
/**
 * Created by PhpStorm.
 * User: hecto
 * Date: 15/02/2018
 * Time: 10:17
 */
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

            <article id="page1" class="tabs-content is-active">
                <div class="main-wrapper">
                <p class="title">Add a new project :</p>
                <form action="../../doadd.php" method="post" class="form">
                    <div class="top">
                      <input type="text" name="title" placeholder="title">
                      <input type="text" name="description" placeholder="description">
                    </div>
                    <div class="top">
                      <input type="text" name="price" placeholder="price">
                      <input type="text" name="image" placeholder="Url / Image">
                    </div>

                    <input type="submit" name="submit" value="OK" class="Yes">
                </form>
            </div></article>
            <article id="page2" class="tabs-content"><div class="main-wrapper">

                    <input type="submit" name="submit" value="OK" class="Yes">
                </form>
            </div></article>
</article>


</div>
</div>
</html>
