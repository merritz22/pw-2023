<?php
      $_APP = parse_ini_file('./../env.ini', true); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo($_APP['app']['ico-link']) ?>" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Contact us</title>
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
  <style>
    section {
      margin: 0% 20%;
      height: 100%;
      font-family: "Montserrat";
    }

    input,
    label {
      display: block;
      width: 100%;
    }
    label {
      font-weight: bold;
      font-size: 20px;
    }
    textarea {
      max-width: 100%;
      width: 100%;
      border-radius: 10px;
      height: 100px;
    }
    form {
      padding: 30px;
      border-radius: 10px;
      box-shadow: 2px 1px 10px 1px rgba(0, 0, 0, 0.6);
    }
    input {
      height: 25px;
      padding: 2px;
      border-radius: 10px;
      margin-bottom: 10px;
    }
    nav {
      position: relative;
    }

    button{
      border: none;
      background: none;
    }
    .cancel{
      margin-left: 15px;
    }
    .button{
      display: flex;
      justify-content: center;
      margin-top: 15px;
    }
    .button>*{
      border: .5px solid black;
      padding: 15px;
      border-radius: 5px;
      transition: .5s all ease-in-out;
    }
    .button>*:hover{
      padding: 20px;
    }
  </style>
  <body>
    <div class="se-pre-con"></div>
    <?php require_once('./parts/nav.php') ?>
    <section>
      <h1>Formulaire de contact</h1>
      <form action="">
        <span>
          <img src="<?php echo($_APP['app']['ico-link']) ?>" alt="Downy logo" height="50px" />
          <?php echo($_APP['app']['name']) ?></span
        >
        <hr />
        <br />
        <label for="Name"
          >Nom Complet
          <input type="text" name="" id="" placeholder="Noms & Prenoms" required
        /></label>
        <label for="Email"
          >Email <input type="email" name="" id="" placeholder="Email" required
        /></label>
        <label for="Message"
          >Message<textarea
            name="Message"
            id=""
            cols=""
            placeholder="Votre Message"
            required
          ></textarea
        ></label>
        <div class="button">
          <span class="submit">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>
            <button type="submit">Enoyer</button>
          </span>
          <span class="cancel">
            <i class="fa fa-trash" aria-hidden="true"></i>
            <button type="reset">Cancel</button>
          </span>
        </div>
      </form>
    </section>
  </body>
</html>