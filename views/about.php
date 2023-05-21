<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="../Images/img-DS.png" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>About Me</title>
    <link rel="stylesheet" href="../css/about-me.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/preloader.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../js/preloader.js"></script>
  </head>
  <style>
    body {
      overflow-x: hidden;
    }
    .about {
      height: 100%;
      margin: 0 10% 0 10%;
    }
    section {
      font-family: "Montserrat";
      height: 100%;
    }
    h1,
    h2 {
      text-align: center;
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
      height: 100px;
    }
    form {
      padding: 30px;
      box-shadow: 2px 1px 10px 1px rgba(0, 0, 0, 0.6);
    }
    input {
      height: 25px;
      padding: 2px;
      margin-bottom: 10px;
    }
    nav {
      position: relative;
    }
    .bg {
      background-image: url("../Images/pp.jfif");
      background-repeat: no-repeat;
      background-size: contain;
      height: 500px;
      width: 500px;
      margin: 0 auto;
    }
    ol > li {
      padding: 30px;
      margin: 0 0 30px 0;
      border: 1px solid black;
      box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
      border-radius: 7px;
    }
    .portfolio {
      margin: 0 5% 0 5%;
    }
    .contact {
      margin: 0 15% 0 15%;
    }
  </style>
  <body>
    <div class="se-pre-con"></div>
    <nav>
      <ul>
        <li class="primary-nav">
          <img src="../Images/img-DS.png" alt="logo" />
          <a href="../index.html">DOWNY SHOES</a>
        </li>
        <li class="secondary-nav">
          <a href="../HTML/checkout.html">
            <i class="fas fa-shopping-cart"></i> CART
          </a>
        </li>
        <li class="secondary-nav"><a href="../HTML/women.html">WOMEN</a></li>
        <li class="secondary-nav"><a href="../HTML/men.html">MEN</a></li>
        <li class="secondary-nav">
          <a href="../HTML/about-us.html">ABOUT US</a>
        </li>
      </ul>
    </nav>
    <section class="about">
      <h1>About Me</h1>
      <div class="bg"></div>
      <h2>JEET GOHIL</h2>
      <p>
        An undergrad student who is extremely passionate in web and app
        development. I work with CSS, HTML, JavaScript, PHP, and mySQL to create
        beautiful, functional web pages for my clients. As well as making
        websites, I enjoy playing video games, making apps for mobile and
        talking to friends.
      </p>
      <br />
      <h3>Hobbies</h3>
      <ul>
        <li>Gaming</li>
        <li>Music</li>
        <li>Swimming</li>
        <li>Reading books</li>
        <li>Skyiving</li>
      </ul>
    </section>
    <section class="portfolio">
      <h1>Portfolio</h1>
      <p>
        These are some of the projects that I have personally created throughout
        my learning progress
      </p>
      <div class="row">
        <ol>
          <li>
            <h1>Wikipedia Viewer</h1>
            <iframe
              height="541"
              style="width: 100%;"
              scrolling="no"
              title="Wikipedia Viewer"
              src="//codepen.io/jeetg57/embed/woYqYo/?height=541&theme-id=0&default-tab=result"
              frameborder="no"
              allowtransparency="true"
              allowfullscreen="true"
            >
              See the Pen
              <a href="https://codepen.io/jeetg57/pen/woYqYo/"
                >Wikipedia Viewer</a
              >
              by Jeet Gohil (<a href="https://codepen.io/jeetg57">@jeetg57</a>)
              on <a href="https://codepen.io">CodePen</a>.
            </iframe>
          </li>

          <li>
            <h2>Casio Calculator App</h2>
            <p
              class="codepen"
              data-height="500"
              data-theme-id="0"
              data-default-tab="result"
              data-user="jeetgohil"
              data-slug-hash="oPBMWb"
              style="height: 500px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
              data-pen-title="Casio Redefined"
            >
              <span
                >See the Pen
                <a href="https://codepen.io/jeetgohil/pen/oPBMWb/">
                  Casio Redefined</a
                >
                by Jeet Gohil (<a href="https://codepen.io/jeetgohil"
                  >@jeetgohil</a
                >) on <a href="https://codepen.io">CodePen</a>.</span
              >
            </p>
            <script
              async
              src="https://static.codepen.io/assets/embed/ei.js"
            ></script>
          </li>
          <li>
            <h2>Random Quote Machine</h2>
            <p
              class="codepen"
              data-height="587"
              data-theme-id="0"
              data-default-tab="result"
              data-user="jeetgohil"
              data-slug-hash="NXZgQb"
              style="height: 587px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
              data-pen-title="RANDOM QUOTE MACHINE"
            >
              <span
                >See the Pen
                <a href="https://codepen.io/jeetgohil/pen/NXZgQb/">
                  RANDOM QUOTE MACHINE</a
                >
                by Jeet Gohil (<a href="https://codepen.io/jeetgohil"
                  >@jeetgohil</a
                >) on <a href="https://codepen.io">CodePen</a>.</span
              >
            </p>
            <script
              async
              src="https://static.codepen.io/assets/embed/ei.js"
            ></script>
          </li>
          <li>
            <h2>Simon Game</h2>
            <p
              class="codepen"
              data-height="627"
              data-theme-id="0"
              data-default-tab="result"
              data-user="jeetg57"
              data-slug-hash="xRNjBZ"
              style="height: 627px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
              data-pen-title="Simon Game"
            >
              <span
                >See the Pen
                <a href="https://codepen.io/jeetg57/pen/xRNjBZ/"> Simon Game</a>
                by Jeet Gohil (<a href="https://codepen.io/jeetg57">@jeetg57</a
                >) on <a href="https://codepen.io">CodePen</a>.</span
              >
            </p>
            <script
              async
              src="https://static.codepen.io/assets/embed/ei.js"
            ></script>
          </li>
          <li>
            <h2>Tic Tac Toe game (vs computer)</h2>
            <p
              class="codepen"
              data-height="690"
              data-theme-id="0"
              data-default-tab="result"
              data-user="jeetg57"
              data-slug-hash="wobJQX"
              style="height: 690px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"
              data-pen-title="Tic Tac Toe"
            >
              <span
                >See the Pen
                <a href="https://codepen.io/jeetg57/pen/wobJQX/">
                  Tic Tac Toe</a
                >
                by Jeet Gohil (<a href="https://codepen.io/jeetg57">@jeetg57</a
                >) on <a href="https://codepen.io">CodePen</a>.</span
              >
            </p>
            <script
              async
              src="https://static.codepen.io/assets/embed/ei.js"
            ></script>
          </li>
        </ol>

        <img src="" alt="" class="portfolio" />
        <img src="" alt="" class="portfolio" />
        <img src="" alt="" class="portfolio" />
        <img src="" alt="" class="portfolio" />
      </div>
    </section>
    <section class="contact">
      <h1>Contact Me</h1>
      <p>
        Items marked as "<strong style="font-size: 20px"> * </strong>" are
        required
      </p>
      <form action="">
        <label for="Name"
          >Full Name*
          <input type="text" name="" id="" placeholder="Name" required
        /></label>
        <label for="Email"
          >Email* <input type="email" name="" id="" placeholder="Email" required
        /></label>

        <label for="Phone"
          >Phone <input type="tel" name="" id="" placeholder="Phone Number" />
        </label>
        <label for="Message"
          >Message*<textarea
            name="Message"
            id=""
            placeholder="Your Message"
            required
          ></textarea
        ></label>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
      </form>
      <h3>
        You can also
        <a href="mailto:jeetg57@gmail.com" target="_blank">Email Me</a>
      </h3>
    </section>
  </body>
</html>