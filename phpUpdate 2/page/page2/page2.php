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

        <div class="tabs-contents">

            <article id="page1" class="tabs-content is-active">
                <div class="main-wrapper">
                <p class="title">Edit the project :</p>
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
