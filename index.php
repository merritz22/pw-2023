<?php
    $_APP = parse_ini_file('env.ini', true);
    require_once('./databases/PDOConnection.php');
    require_once('./controllers/AccountFunction.php');
    require_once('./controllers/CheckoutFunction.php');
    
    session_start();

    $db = connection('env.ini');
    // getUser($_REQUEST['email'],$_REQUEST['pass']);
    if(isset($_SESSION)){
      $_SESSION['panier'] = count(getCheckout($db, $_SESSION['user']));
    }else if (isset($_POST['email'])) {
      $user = getUser($db,$_POST['email'],$_POST['pass']);
      // var_dump($user[0]);
      $panier = getCheckout($db, $user[0]['id']);
      // var_dump(count($panier));
      if(count($user) == 0){
        
        header("Location:".$_APP['route']['connexion']);
      }
      else{
        $_SESSION['user'] = $user[0]['id'];
        $_SESSION['panier'] = count($panier);
      }
    }

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
    <!-- <div style="height: 100px;margin-left:5%;position:absolute;color:red;background:darkblue;">
      <?php //var_dump($_SESSION) ?>
    </div> -->
    <section>
      <div
        class="row"
        style="width: 80%;
      margin: 0 auto;"
      >
        <div class="col">
          <div class="overlay-image">
            <a href="<?php echo($_APP['route']['hommes']) ?>">
              <img class="image" src="<?php echo($_APP['images']['men3']) ?>" alt="Alt text" />
              <div class="normal">
                <div class="text">HOMME</div>
              </div>
              <div class="hover">
                <img
                  class="image"
                  src="<?php echo($_APP['images']['nike12']) ?>"
                  alt="Alt text hover"
                />
                <div class="text">HOMME</div>
              </div>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="overlay-image">
            <a href="<?php echo($_APP['route']['femmes']) ?>">
              <img
                class="image"
                src="<?php echo($_APP['images']['women5']) ?>"
                alt="Alt text"
              />
              <div class="normal">
                <div class="text">FEMMES</div>
              </div>
              <div class="hover">
                <img
                  class="image"
                  src="<?php echo($_APP['images']['women6']) ?>"
                  alt="Alt text hover"
                />
                <div class="text">FEMMES</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="preview">
      <h2 align="center">Les plus vendus</h2>
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
    <?php require_once("./views/parts/footer.php") ?>
  </body>
</html>