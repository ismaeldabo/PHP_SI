<html>
<header>
  <link rel="stylesheet" href="css/styleSignUp.css">
  <link rel="stylesheet" href="css/reset.css">
</header>

<?php
 ?>

<div class="tabs">

        <nav>
            <a href="#page1" class="is-active">ADD PROJECTS</a>
            <a href="#page2">EDIT</a>
            <a href="#page3">REMOVE</a>
        </nav>


        <div class="tabs-contents">

            <article id="page1" class="tabs-content is-active"><div class="main-wrapper">
                <p class="title">Add a new project :</p>
                <form action="doadd.php" method="post" class="form">
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
                <p class="title">Edit your current project :</p>
                <form action="doadd.php" method="post" class="form">
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
            <article id="page3" class="tabs-content"></article>


        </div>
    </div>
    <script>
    var tab = document.querySelectorAll('.tabs nav a');
        var content = document.querySelectorAll('.tabs-content');

        for (var i = 0; i < tab.length; i++) {

            tab[i].addEventListener('click', function() {
                var href = this.getAttribute('href');
                href = href.replace('#', '');

                for (var a = 0; a < tab.length; a++) {
                    tab[a].classList.remove('is-active');
                }

                this.classList.add('is-active');


                for (var a = 0; a < content.length; a++) {
                    if (href === content[a].getAttribute('id')) {
                        content[a].classList.add('is-active');
                    } else {
                        content[a].classList.remove('is-active');
                    }
                }

            });

        }
    </script>
</body>
</html>
