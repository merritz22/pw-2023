<?php
      $_APP = parse_ini_file('./../env.ini', true); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo($_APP['app']['ico-link']) ?>" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Panier</title>
    <link rel="stylesheet" href="./css/checkout.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap"
      rel="stylesheet"
    />
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
      <h1>Votre Panier</h1>
      <div class="row">
        <div class="column">
          <h5>Veuillez choisir les quantites</h5>
          <div class="cart-item" id="item">
            <img src="../Images/img-Nike1.jpg" alt="" />
            <p>Nike Air Max (Red)</p>
            <p>6 500 Frs</p>
            <input
              type="number"
              name="quantity"
              id="no-of-items"
              value="1"
              min="1"
              max="6"
              step="1"
            />
            <button id="remove" class="remove">
              <i class="fas fa-trash fa-2x"></i>
            </button>
          </div>
          <div class="cart-item" id="item1">
            <img src="../Images/img-Nike4.jpg" alt="" />
            <p>Nike Air Max (Pink)</p>
            <p>15 000 Frs</p>
            <input
              type="number"
              name="quantity"
              id="no-of-items"
              value="1"
              min="1"
              max="6"
              step="1"
            />
            <button id="remove2" class="remove">
              <i class="fas fa-trash fa-2x"></i>
            </button>
          </div>
          <div class="cart-item" id="item2">
            <img src="../Images/img-Nike3.jpg" alt="" />
            <p>Nike Air Max (Blue)</p>
            <p>25 050 Frs</p>
            <input
              type="number"
              name="quantity"
              id="no-of-items"
              value="1"
              min="1"
              max="6"
              step="1"
            />
            <button id="remove3" class="remove">
              <i class="fas fa-trash fa-2x"></i>
            </button>
          </div>
          <hr />
        </div>
        <div class="column2">
          <h3>Comptabilite</h3>
          <h3>Totals &nbsp; &nbsp; 46 550 Frs</h3>
          <div class="buttons">
            <a class="button-checkout" href="<?php echo($_APP['route']['confirm']) ?>">Acheter</a>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>