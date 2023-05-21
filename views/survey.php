<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="../Images/img-DS.png" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Survey</title>
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/preloader.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../js/preloader.js"></script>
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  />
  </head>
  <style>
    body{
      overflow-x: hidden;
    }
    nav{
      position: relative;
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
    <section>
            <div class="container" style="margin: 20px 30% 0 30% ">
              <h2>Please fill this form </h2>
             <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
               <form method="post">
                <div class="form-group ">
                 <label class="control-label " for="name">
                  Name
                 </label>
                 <input class="form-control" id="name" name="name" type="text"/>
                </div>
                <div class="form-group ">
                 <label class="control-label requiredField">
                  Gender
                  <span class="asteriskField">
                   *
                  </span>
                 </label>
                 <div class="">
                  <div class="radio">
                   <label class="radio">
                    <input name="radio" type="radio" value="Male"/>
                    Male
                   </label>
                  </div>
                  <div class="radio">
                   <label class="radio">
                    <input name="radio" type="radio" value="Female"/>
                    Female
                   </label>
                  </div>
                  <div class="radio">
                   <label class="radio">
                    <input name="radio" type="radio" value="Unspecified"/>
                    Unspecified
                   </label>
                  </div>
                 </div>
                </div>
                <div class="form-group ">
                 <label class="control-label " for="select">
                  Your city
                 </label>
                 <select class="select form-control" id="select" name="select">
                  <option value="Nairobi">
                   Nairobi
                  </option>
                  <option value="Mombasa">
                   Mombasa
                  </option>
                  <option value="Nakuru">
                   Nakuru
                  </option>
                  <option value="Kisumu">
                   Kisumu
                  </option>
                 </select>
                </div>
                <div class="form-group ">
                 <label class="control-label " for="number">
                  Your Age
                 </label>
                 <input class="form-control" id="number" name="number" placeholder="Age" type="text"/>
                </div>
                <div class="form-group ">
                 <label class="control-label requiredField" for="email">
                  Email
                  <span class="asteriskField">
                   *
                  </span>
                 </label>
                 <input class="form-control" id="email" name="email" type="text"/>
                </div>
                <div class="form-group ">
                 <label class="control-label " for="tel">
                  Telephone
                 </label>
                 <input class="form-control" id="tel" name="tel" placeholder="Phone number" type="text"/>
                </div>
                <div class="form-group ">
                 <label class="control-label " for="message">
                  Message
                 </label>
                 <textarea class="form-control" cols="40" id="message" name="message" rows="10"></textarea>
                </div>
                <div class="form-group">
                 <div>
                  <button class="btn btn-primary " name="submit" type="submit">
                   Submit
                  </button>
                  <button class="btn btn-secondary" type="reset">Reset</button>
                 </div>
                </div>
               </form>
              </div>
             </div>
            </div>

  
    <script>
      //Script for displaying slider value
      var slider = document.getElementById("myRange");
      var output = document.getElementById("range-num");
      output.innerHTML = slider.value;
      slider.oninput = function() {
        output.innerHTML = this.value;
      };
    </script>
  </body>
</html>