<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/reset.css">

  <title>PHP</title>
</head>

<body>
<?php
require_once "connect.php";
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

  <header class="header-container">
      <div class="header-container-logo">
          <div class="header-container-logo-back">
              <img class="header-container-logo-back-img" src="img/logo.png">
          </div>
      </div>

      <div class="header-container-icons">

          <button class="btn">settings</button>

      </div>
  </header>
  <section class="body-container">
    <div class="body-container-product">
      <img src="<?=$row['image']?>" alt="" class="body-container-product-img">


    </div>
    <div class="body-container-content">
      <div class="body-container-content-title">
        <p><?=$row['title']?></p>

      </div>
      <div class="body-container-content-description">
        <p><?=$row['description']?></p>

      </div>
      <div class="body-container-content-price">
        <div class="body-container-content-price-text">
          PRICE

        </div>
        <div class="body-container-content-price-doll"><?=$row['price']?>$
        </div>
      </div>
      <section class="body-container-content-section">
        <div class="body-container-content-count">
          <span class="body-container-content-count-left">-</span>
          <div class="body-container-content-count-screen">1</div>
          <span class="body-container-content-count-more">+</span>

        </div>
        <div class="body-container-content-count-add">
          <p class="body-container-content-count-text">ADD TO BAG</p>

        </div>

      </section>

    </div>

  </section>
<div class="modal">
    <div class="modal_overlay"></div>
    <div class="modal_content">
        <form class="header-container-icons-account" action="page/page1/page1.php">
            <input type="hidden" value=" <?=$row['id'] ?>" placeholder="Project you want to edit">
            <input type="submit" name="submit" value="ADD" class="Yes">
        </form>
        <form class="header-container-icons-account" action="page/page2/page2.php">
            <input type="hidden" value=" <?=$row['id'] ?> ">
            <input type="submit" name="submit" value="EDIT" class="Yes">
        </form>
        <form class="header-container-icons-account" action="dodelete.php" method="post">
            <input type="hidden" name="id" value="<?=$_GET["id"]?>">
            <input type="submit" name="submit" value="delete" class="Yes">
        </form>

    </div>
</div>

<script>
    var btn = document.querySelector('button');
    var modal = document.querySelector('.modal');
    var overlay = document.querySelector('.modal_overlay');

    btn.addEventListener('click', function() {
        modal.style.display = 'block';
    });

    overlay.addEventListener('click', function() {
        modal.style.display = '';
    });

</script>


</body>

</html>

