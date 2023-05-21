<?php
    $_APP = parse_ini_file('env.ini', true);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo($_APP['app']['name']) ?></title>
    <!-- on charge le nom du site depuis le fichier env.ini -->
    
    <link type="image/x-icon" href="<?php echo($_APP['app']['ico-link']) ?>" />
    <!-- on charge le lien de l'icone du site depuis le fichier env.ini -->
    <link rel="stylesheet" href="./views/css/index.css" />
    <link rel="stylesheet" href="./views/css/navbar.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- on charge un font-family depuis google fonts -->

    <link rel="stylesheet" href="./views/css/preloader.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
    <!-- on inclut le lien de fontawesome pour utiliser des icones dans notre site -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- on inclut jquery depuis le cdn pour gerer des animations javascript -->

    <script src="./views/js/preloader.js"></script>
  </head>

  <body>
    <div class="se-pre-con"></div>
    <header id="home">
      <?php require_once('./views/parts/nav.php') ?>
      <div class="pxtext">
        <span class="border">
          Nike Air Jordan
        </span>
        <p><a href="<?php echo($_APP['route']['hommes']) ?>">Acheter maintenant</a></p>
      </div>
    </header>
    <section>
      <div
        class="row"
        style="width: 80%;
      margin: 0 auto;"
      >
        <div class="col">
          <div class="overlay-image">
            <a href="HTML/men.html">
              <img class="image" src="./Images/img-men6.jpg" alt="Alt text" />
              <div class="normal">
                <div class="text">MEN</div>
              </div>
              <div class="hover">
                <img
                  class="image"
                  src="./Images/img-Nike12.jpg"
                  alt="Alt text hover"
                />
                <div class="text">MEN</div>
              </div>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="overlay-image">
            <a href="HTML/women.html">
              <img
                class="image"
                src="./Images/img-women5.jpeg"
                alt="Alt text"
              />
              <div class="normal">
                <div class="text">WOMEN</div>
              </div>
              <div class="hover">
                <img
                  class="image"
                  src="./Images/img-women6.jpeg"
                  alt="Alt text hover"
                />
                <div class="text">WOMEN</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="preview">
      <h2 align="center">Best Sellers</h2>
      <div
        class="row"
        style="  width: 80%;
      margin: 0 auto;"
      >
        <figure class="item">
          <a href="HTML/info.html">
            <img src="./Images/img-Nike1.jpg" alt="" width="100%" />
            <figcaption>Nike Run +</figcaption>
          </a>
        </figure>
        <figure class="item">
          <a href="HTML/info.html">
            <img src="./Images/img-Nike3.jpg" alt="" width="100%" />
            <figcaption>Nike Air Blue</figcaption>
          </a>
        </figure>
        <figure class="item">
          <a href="HTML/info.html">
            <img src="./Images/img-Nike5.jpg" width="100%" />
            <figcaption>Casual Nike</figcaption>
          </a>
        </figure>
        <figure class="item">
          <a href="HTML/info.html">
            <img src="./Images/img-Nike10.jpg" alt="" width="100%" />
            <figcaption>Nike Air Orange</figcaption>
          </a>
        </figure>
      </div>
    </section>

    <h3 style="text-align: center">
      <a href="./HTML/survey.html">Click here to take a quick survey</a>
    </h3>

    <footer>
      <div class="row foot">
        <div class="col">
          <h1>Downy Shoes</h1>
          <p>
            Official <a href="https://www.nike.com/xf/en_gb/">Nike</a> Partner
          </p>
        </div>
        <div class="col">
          <h2>Links</h2>
          <ul>
            <li><a href="./HTML/shop.html">Catalog</a></li>

            <li><a href="./HTML/Contact-us.html">Contact us</a></li>
            <li><a href="./HTML/survey.html">Take a survey</a></li>
            <li>
              <a href="./HTML/terms-and-conditions.html"
                >Terms and conditions</a
              >
            </li>
            <li>
              <a href="./HTML/refund-policy.html">Refund Policy</a>
            </li>
          </ul>
        </div>
        <div class="col">
          <h2>
            Copyright <sup>©</sup>
            <a href="https://www.codepen.io/jeetg57" target="_blank"
              >Jeet Gohil</a
            >
          </h2>
        </div>
      </div>
    </footer>
    <footer id="footer-social">
      <ul class="row foot-icons" style="list-style-type: none;">
        <li>
          <a href="https://twitter.com/JeetGohil_" target="_blank">
            <i class="fab fa-twitter fa-3x"></i>
          </a>
        </li>
        <li>
          <a href="https://www.facebook.com/MarioJT99" target="_blank">
            <i class="fab fa-facebook fa-3x"></i>
          </a>
        </li>
        <li>
          <a href="https://www.codepen.io/jeetg57" target="_blank">
            <i class="fab fa-codepen fa-3x"></i>
          </a>
        </li>
        <li>
          <a href="https://github.com/Jeetg57" target="_blank">
            <i class="fab fa-github fa-3x"></i>
          </a>
        </li>
      </ul>
    </footer>
  </body>
</html>