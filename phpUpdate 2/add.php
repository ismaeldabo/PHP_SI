<html>
<header>
  <link rel="stylesheet" href="css/styleSignUp.css">
</header>
<section class="main-container">
    <div class="main-container-overlay">
    <div class="main-wrapper">
        <p>Add a new project :</p>
        <form action="doadd.php" method="post" class="form">
            <div class="top">
              <input type="text" name="title" placeholder="title">
              <input type="text" name="description" placeholder="description">
            </div>
            <div class="top">
              <input type="text" name="price" placeholder="price">
              <input type="text" name="image" placeholder="Url / Image">
            </div>

            <input type="submit" name="submit" class="Yes">
        </form>
    </div>
    <div class="main-wrapper">
        <p>Edit your current project :</p>
        <form action="doadd.php" method="post" class="form">
            <div class="top">
              <input type="text" name="title" placeholder="title">
              <input type="text" name="description" placeholder="description">
            </div>
            <div class="top">
              <input type="text" name="price" placeholder="price">
              <input type="text" name="image" placeholder="Url / Image">
            </div>

            <input type="submit" name="submit" class="Yes">
        </form>
    </div>

    </div>
    <form action="add.php" class="addBtn">
        <input type="submit" name="submit" href="#" class="Yes">
    </form>

</section>
</html>
