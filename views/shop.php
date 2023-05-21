<?php
      $_APP = parse_ini_file('./../env.ini', true); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo($_APP['app']['ico-link']) ?>" />
    <title><?php echo($_APP['app']['name']) ?></title>
    <link rel="stylesheet" href="./css/shop.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/navbar.css" />
    <link rel="stylesheet" href="./css/preloader.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="./js/preloader.js"></script>
  </head>

  <body>
    <div class="se-pre-con"></div>
    <?php require_once('./parts/nav.php') ?>
    <section>
      <h1>CATALOGUE</h1>
      <h2>Tendance</h2>
      <p>Nos meilleurs produits</p>
      <div class="items">
        <div class="card">
          <img src="http://localhost/pw-2023/ressources/images/img-Nike1.jpg" alt="Shoe" style="width:100%" />
          <h3>Nike Free RN OC</h3>
          <p class="price">4000 FCFA</p>
          <p><a href="info.html">En savoir plus</a></p>
        </div>
        <div class="card">
          <img src="http://localhost/pw-2023/ressources/images/nike-6.jpg" alt="Shoe" style="width:100%" />
          <h3>Nike Free RN OC</h3>
          <p class="price">6600 FCFA</p>
          <p><a href="info.html">En savoir plus</a></p>
        </div>
      </div>
    </section>
  </body>
</html>