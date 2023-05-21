<?php
      $_APP = parse_ini_file('./../env.ini', true); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="../Images/img-DS.png" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap"
      rel="stylesheet"
    />
    <title>Downy Shoes</title>
  </head>
  <style>
    h1 {
      font-family: "Montserrat";
      font-size: 150px;
      text-align: center;
    }
    p {
      text-align: center;
    }
    a {
      font-family: "Montserrat";
      text-decoration: none;
      color: black;
      font-size: 50px;
    }
    a:hover {
      color: cadetblue;
    }
  </style>
  <body>
    <h1>Achat realisez avec succes</h1>
    <p><a href="<?php echo($_APP['route']['accueil']) ?>">Clickez ici pour l'Accueil</a></p>
  </body>
</html>