<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order now | Munchies Fast Food</title>
    <link rel="stylesheet" href="css/orderNow.css">
</head>

<!-- Header with image -->
<header class="" id="home">
    <div class="site-logo" style="text-align: left;">
      <a href="index.html"><img src="https://api.logo.com/api/v2/images?logo=logo_23fb901d-8316-4a6f-8d77-e3d2e999901e&format=webp&margins=0&quality=60&width=500&background=transparent&u=1685363943" alt="logo" style="position:absolute;" ></a>
    </div>
    <div class="topnav">
      <div class="navbar">
        <a href="welcome.php" > Home</a>
        <a href="menu.php" > Menu</a>
        <a href="orderNow.php" > Order Now</a>
        <a href="viewBlog.php" > Blog</a>
        <a href="aboutUs.php" > About Us</a>
        <a href="contactUs.php" > Contact Us</a>
        <a href="login.php" class="">Sign     In</a>
        <a href="register.php" class="">Sign Up</a>
      </div>
    </div>
  
  </header>

<body>
    
    <h2 style="color: rgb(225, 33, 19);">Place your order here</h2>
<p style="color: rgb(225, 33, 19);">Deliveries take less than 30 minutes.</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="First name">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Email">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Address">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="City">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="State">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="Zip code">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;">Visa</i>
              <i class="fa fa-cc-amex" style="color:blue;">Amex</i>
              <i class="fa fa-cc-mastercard" style="color:red;">Mastercard</i>
              <i class="fa fa-cc-discover" style="color:orange;">Discover</i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Name on card">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Expiry month">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="Expiry year">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="menu.html">Product 1</a> <span class="price">_</span></p>
      <p><a href="menu.html">Product 2</a> <span class="price">_</span></p>
      <p><a href="menu.html">Product 3</a> <span class="price">_</span></p>
      <p><a href="menu.html">Product 4</a> <span class="price">_</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>_</b></span></p>
    </div>
  </div>
</div>

</body>
</html>