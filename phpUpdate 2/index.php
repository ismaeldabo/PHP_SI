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
      <div class="header-container-icons-search">
        <img src="img/account.png" alt="" class="header-container-icons-search-img">
      </div>
      <a class="header-container-icons-account" href="add.php">
        <img src="img/more.png" alt="" class="header-container-icons-account-img">
      </a>
      <div class="header-container-icons-market">
        <img src="img/market.png" alt="" class="header-container-icons-market-img">
      </div>

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
<section>
  <div class="main-wrapper">


  </div>
</section>

  <script>
    var counter = 0;

    var screen = document.querySelector('.body-container-content-count-screen');
    var plus = document.querySelector('.body-container-content-count-more');
    var minus = document.querySelector('.body-container-content-count-left');

    plus.addEventListener('click', function() {

      counter = counter + 1;
      screen.textContent = counter;

    });

    minus.addEventListener('click', function() {
      if (counter > 1) {
        counter = counter - 1;
        screen.textContent = counter;
      }
    });

    var btn = document.querySelector('.header-container-icons-account-img');
    var modal = document.querySelector('.main-container');
    var overlay = document.querySelector('.main-container-overlay');

    btn.addEventListener('click', function() {
      modal.style.display = 'block';
    });

    overlay.addEventListener('click', function() {
      modal.style.display = '';
    });
  </script>


</body>

</html>
