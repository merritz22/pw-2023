<?php
      $_APP = parse_ini_file('./../env.ini', true); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo($_APP['app']['ico-link']) ?>" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Hommes</title>
    <link rel="stylesheet" href="./css/men.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href = "./css/navbar.css">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php require_once('./parts/nav.php') ?>
    <section class="items">
      <h1>CHAUSSURES 
        <?php
          if ($_REQUEST['type'] == 'femme'){
            echo('FEMMES');
          }else{
            echo('HOMMES');
          }
        ?>
      </h1>
      <div class="row">
        <div class="col">
            <h2>Trier par:</h2>
          <h3>Prix</h3>
          <hr />
          <input type="radio" name="price" id="" /> - 25 000<br />
          <input type="radio" name="price" id="" /> + 25 000<br />
          <h3>Taille</h3>
          <hr />
          <input type="radio" name="size" id="" /> 36 <br />
          <input type="radio" name="size" id="" /> 37 <br />
          <input type="radio" name="size" id="" /> 38 <br />
          <input type="radio" name="size" id="" /> 39 <br />
          <input type="radio" name="size" id="" /> 40 <br />
          <input type="radio" name="size" id="" /> 41 <br />
          <input type="radio" name="size" id="" /> 42 <br />
          <input type="radio" name="size" id="" /> 43 <br />
          <h3>Couleur</h3>
          <hr />
          <input type="radio" name="color" id="" /> Noire <br />
          <input type="radio" name="color" id="" /> Blanche <br />
          <input type="radio" name="color" id="" /> Rouge <br />
          <input type="radio" name="color" id="" /> Bleue <br />
        </div>
        <div class="col2">
          <img class="header-img" src="
            <?php
            if ($_REQUEST['type'] == 'femme'){
              echo($_APP['images']['anim_nike_women']);
            }else{
              echo($_APP['images']['anim_nike']);
            }
          ?>" alt="" />
          <div class="items2">
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
      </div>
    </section>
  </body>
</html>