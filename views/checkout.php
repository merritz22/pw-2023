<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="../Images/img-DS.png" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Checkout</title>
    <link rel="stylesheet" href="../css/checkout.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/preloader.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/deleteItems.js"></script>
  </head>

  <body>
    <div class="se-pre-con"></div>
    <header>
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
    </header>
    <section>
      <h1>Cart</h1>
      <div class="row">
        <div class="column">
          <h1>Your Order</h1>
          <h5>Please select the quantity below</h5>
          <div class="cart-item" id="item">
            <img src="../Images/img-Nike1.jpg" alt="" />
            <p>Nike Air Max (Red)</p>
            <p>$399.90</p>
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
            <p>$299.90</p>
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
            <p>$199.90</p>
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
          <h3>Cart Totals</h3>
          <div class="row1">
            <div class="col">
              <h5>Subtotals</h5>
              <h5>Shipping</h5>
            </div>
            <div class="col">
              <h5>$199.90</h5>
              <div class="wrapper">
                <span>
                  <input type="radio" name="shipping" id="" checked />Flat
                  rate:$10
                </span>
                <span>
                  <input type="radio" name="shipping" id="" />Free Shipping
                  <br />
                </span>
                <span>
                  <input type="radio" name="shipping" id="" />Local Pickup
                </span>
                <span
                  >Shipping options <br />
                  will be updated <br />during checkout.</span
                >
              </div>
            </div>
          </div>
          <h3>Totals &nbsp; &nbsp; $1000</h3>
          <div class="buttons">
            <a class="button-checkout" href="confirmation.html">Checkout</a>
            <a class="cancel" href="../HTML/men.html">Continue Shopping</a>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>