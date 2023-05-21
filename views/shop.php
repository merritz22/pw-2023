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
      <h1>a</h1>
      <h2>Trending</h2>
      <p>Our most trendy collection</p>
      <div class="items">
        <div class="card">
          <img src="../Images/img-Nike1.jpg" alt="Shoe" style="width:100%" />
          <h3>Nike Free RN OC</h3>
          <p class="price">$399.99</p>
          <p><a href="info.html">Learn More</a></p>
        </div>
        <div class="card">
          <img src="../Images/nike-6.jpg" alt="Shoe" style="width:100%" />
          <h3>Nike Free RN OC</h3>
          <p class="price">$299.99</p>
          <p><a href="info.html">Learn More</a></p>
        </div>
        <div class="card">
          <img src="../Images/img-Nike3.jpg" alt="Shoe" style="width:100%" />
          <h3>Nike Air Max (Blue)</h3>
          <p class="price">$199.99</p>
          <p><a href="info.html">Learn More</a></p>
        </div>
        <div class="card">
          <img src="../Images/img-Nike4.jpg" alt="Shoe" style="width:100%" />
          <h3>Nike Air Max (Pink & white)</h3>
          <p class="price">$399.99</p>
          <p><a href="info.html">Learn More </a></p>
        </div>
        <div class="card">
          <img src="../Images/img-Nike5.jpg" alt="Shoe" style="width:100%" />
          <h3>Nike Air Max (white)</h3>
          <p class="price">$400.99</p>
          <p><a href="info.html">Learn More</a></p>
        </div>
        <div class="card">
          <img src="../Images/img-nike7.jpg" alt="Shoe" style="width:100%" />
          <h3>Nike Run 4.0</h3>
          <p class="price">$199.99</p>
          <p><a href="info.html">Learn More</a></p>
        </div>
        <div class="card">
          <img
            src="../Images/img-nike-jordan.jpg"
            alt="Shoe"
            style="width:100%"
          />
          <h3>Nike + Jordan (Special Edition)</h3>
          <p class="price">$199.99</p>
          <p><a href="info.html">Learn More</a></p>
        </div>
        <div class="card">
          <img
            src="../Images/img-nike-jays.jpg"
            alt="Shoe"
            style="width:100%"
          />
          <h3>Nike Canvas</h3>
          <p class="price">$99.99</p>
          <p><a href="info.html">Learn More</a></p>
        </div>
        <div class="card">
          <img src="../Images/img-Nike9.jpg" alt="Shoe" style="width:100%" />
          <h3>Nike Air Force One (Yellow)</h3>
          <p class="price">$199.99</p>
          <p><a href="info.html">Learn More</a></p>
        </div>
        <div class="card">
          <img src="../Images/img-Nike10.jpg"Shoe" style="width:100%">
          <h3>Nike Air Max (Yellow)</h3>
          <p class="price">$199.99</p>
          <p><a href="info.html">Learn More</a></p>
        </div>
        <div class="card">
          <img src="../Images/img-Nike11.jpg" alt="Shoe" style="width:100%" />
          <h3>Nike + Jordan (Special Edition) Purple</h3>
          <p class="price">$599.99</p>
          <p><a href="info.html">Learn More</a></p>
        </div>
        <div class="card">
          <img src="../Images/img-Nike12.jpg" alt="Shoe" style="width:100%" />
          <h3>Nike Air</h3>
          <p class="price">$399.99</p>
          <p><a href="info.html">Learn More</a></p>
        </div>
      </div>
    </section>
  </body>
</html>