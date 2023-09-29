<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | Munchies fast food</title>
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>

    <!-- Header with image -->
<header  id="home">
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
        <a href="login.php" class="">Sign In</a>
        <a href="register.php" class="">Sign Up</a>
      </div>
    </div>
  
  </header>
    
<!-- Menu Container -->
<!--<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
    <div class="w3-content">
    
      <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">THE MENU</h1>
      <div class="w3-row w3-center w3-border w3-border-dark-grey">
        <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
          <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Pizza</div>
        </a>
        <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
          <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Salads</div>
        </a>
        <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
          <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Starter</div>
        </a>
      </div>
  
      <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
        <h1><b>Margherita</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$12.50</span></h1>
        <p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p>
        <hr>
     
        <h1><b>Formaggio</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$15.50</span></h1>
        <p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p>
        <hr>
        
        <h1><b>Chicken</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$17.00</span></h1>
        <p class="w3-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p>
        <hr>
  
        <h1><b>Pineapple'o'clock</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$16.50</span></h1>
        <p class="w3-text-grey">Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p>
        <hr>
  
        <h1><b>Meat Town</b> <span class="w3-tag w3-red w3-round">Hot!</span><span class="w3-right w3-tag w3-dark-grey w3-round">$20.00</span></h1>
        <p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p>
        <hr>
  
        <h1><b>Parma</b> <span class="w3-tag w3-grey w3-round">New</span><span class="w3-right w3-tag w3-dark-grey w3-round">$21.50</span></h1>
        <p class="w3-text-grey">Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p>
      </div>
  
      <div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
        <h1><b>Lasagna</b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">$13.50</span></h1>
        <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
        <hr>
     
        <h1><b>Ravioli</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$14.50</span></h1>
        <p class="w3-text-grey">Ravioli filled with cheese</p>
        <hr>
        
        <h1><b>Spaghetti Classica</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$11.00</span></h1>
        <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
        <hr>
  
        <h1><b>Seafood pasta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$25.50</span></h1>
        <p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p>
      </div>
  
  
      <div id="Starter" class="w3-container menu w3-padding-32 w3-white">
        <h1><b>Today's Soup</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span></h1>
        <p class="w3-text-grey">Ask the waiter</p>
        <hr>
     
        <h1><b>Bruschetta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$8.50</span></h1>
        <p class="w3-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
        <hr>
        
        <h1><b>Garlic bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$9.50</span></h1>
        <p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
        <hr>
        
        <h1><b>Tomozzarella</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$10.50</span></h1>
        <p class="w3-text-grey">Tomatoes and mozzarella</p>
      </div><br>
  
    </div>
  </div>-->


<button class="tablink" onclick="openPage('Pizzas', this, 'red')" id="defaultOpen">Pizzas</button>
<button class="tablink" onclick="openPage('Fries', this, 'green')" >Fries</button>
<button class="tablink" onclick="openPage('Burgers', this, 'blue')">Burgers</button>
<button class="tablink" onclick="openPage('Drinks', this, 'orange')">Drinks</button>

<div id="Pizzas" class="tabcontent">
    <h1><b>Margherita</b> <span >--@Ksh.1250</span></h1>
    <p>Fresh tomatoes, fresh mozzarella, fresh basil</p>
    <hr>

    <h1><b>Formaggio</b> <span >--@Ksh.1550</span></h1>
    <p >Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p>
    <hr>
    
    <h1><b>Chicken</b> <span >--@Ksh.1700</span></h1>
    <p >Fresh tomatoes, mozzarella, chicken, onions</p>
    <hr>

    <h1><b>Pineapple'o'clock</b> <span >--@Ksh.1650</span></h1>
    <p >Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p>
    <hr>

    <h1><b>Meat Town</b> <span >--@Ksh.2000</span></h1>
    <p >Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p>
    <hr>

    <h1><b>Parma</b> <span >--@Ksh.2150</span></h1>
    <p >Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p>
  
</div>

<div id="Fries" class="tabcontent">
    <h1><b>BBQ Chicken Waffle Fries</b> <span >--@Ksh.750</span></h1>
    <p >barbecue chicken leftovers and fries with lettuce tomato and pickle </p>
    <hr>

    <h1><b>Parmesan Sweet Potato Wedges</b> <span >--@Ksh.750</span></h1>
    <p >Sweet potato wedges with dipping (crispy Parmesan, mustard,garlic, barbecue sauce or ketchup)</p>
    <hr>
    
    <h1><b>Garlic-chive Baked Fries</b> <span >--@Ksh.800</span></h1>
    <p >crispy, golden fries, full of garlic flavor</p>
    <hr>

    <h1><b>Loaded Waffle Fries</b> <span >--@Ksh.900</span></h1>
    <p >Topped with a savory blend of cheese, scallions and bacon</p>
    <hr>

    <h1><b>Parmesan Potato Wedges</b><span >--@Ksh.900</span></h1>
    <p >Served alongside a salad for a light lunch or served as a side dish with a chicken or beef entree</p>
    <hr>

    <h1><b>Reuben Waffle Potato Appetizers</b><span >--@Ksh.950</span></h1>
    <p > Fun appetizer with corned beef and sauerkraut on waffle fries</p>
</div>

<div id="Burgers" class="tabcontent">
    <h1><b>Slutty Vegan's One Night Stand Burger</b> <span >--@Ksh.450</span></h1>
    <p>Topped with all the fixings, including caramelized red onion, vegan bacon, melty vegan cheese, and a smoky chipotle-lime mayonnaise</p>
    <hr>

    <h1><b>Copycat Shake Shack Burger</b> <span >--@Ksh.500</span></h1>
    <p >Fresh tomato, green leaf lettuce, and potato rolls</p>
    <hr>
    
    <h1><b>Chicken Burger</b> <span >--@Ksh.500</span></h1>
    <p >seasoned with smoked paprika and topped with crunchy, bright coleslaw</p>
    <hr>

    <h1><b>Pizza Burger</b> <span >--@Ksh.550</span></h1>
    <p >Perfect combo much like BLT sushi or pizza chicken</p>
    <hr>

    <h1><b>Greek-Inspired Salmon Burgers</b> <span >--@Ksh.650</span></h1>
    <p >light, flavorful salmon burger sandwiched in fluffy pita</p>
    <hr>

    <h1><b>Quesadilla Burger</b> <span >--@Ksh.750</span></h1>
    <p >A chili- and jalapeño-spiced patty is *the* perfect filling for crispy fried tortillas</p>
</div>

<div id="Drinks" class="tabcontent">
    <h1><b>Shaken Iced Passion Tango Tea</b> <span >--@Ksh.200</span></h1>
    <hr>

    <h1><b>Pineapple Orange Fruit Smoothie</b> <span >--@Ksh.250</span></h1>
    <hr>

    <h1><b>Raspberry Iced Tea</b> <span >--@Ksh.275</span></h1>
    <hr>

    <h1><b>Cucumber Orange Cooler</b> <span >--@Ksh.275</span></h1>
    <hr>

    <h1><b>Strawberry Banana Smoothie</b> <span >--@Ksh.300</span></h1>
    <hr>

    <h1><b>Peach and Blueberry Smoothie</b> <span >--@Ksh.400</span></h1>
    <hr>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>