<!-- About Container -->
<!DOCTYPE html>
<html>
<title>7G Pizzas</title>
<link rel="icon" href="http://payforpizza.com/wp-content/uploads/2013/12/pizza.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="style.css" media="all"/>
 <link rel="stylesheet" href="bootstrap.css" media="all"/>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("http://kingstonhouseofpizza.com/wp-content/uploads/2012/10/Fotolia_41104275_Subscription_Monthly_XXL.jpg");
    min-height: 90%;
}
</style>
<style type="text/css">
button {
  font: inherit;
  color: inherit;
  width: 200px;
  text-transform: uppercase;
  padding: 2px 80px;
	margin: 15px 30px;
  background: #823aa0;
  overflow: hidden;
  position: relative;
}
button:before {
  	left: 48%;
}
button:active {
	background: #9053a9;
  color: #823aa0;
	top: 2px;
}
button > span {
	display: inline-block;
	transition: all 0.5s;
}
.icon-forward:before {
  content: "→";
  position: absolute;
}
.icon-backward:before {
  content: "←";
  position: absolute;
}
.icon-up:before {
  content: "↑";
  position: absolute;
}
.icon-down:before {
  content: "↓";
  position: absolute;
}
.btn-1:before {
	left: -100%;
  transition: all 0.5s;
}
.btn-1:hover:before {
	left: 48%;
}
.btn-1:hover > span {
	transform: translateX(300%);
}
.btn-2:before {
	top: -100%;
  transition: all 0.5s;
}
.btn-2:hover:before {
	top: 30%;
}
.btn-2:hover > span {
	transform: translateY(300%);
}	

</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button">HOME</a>
    <a href="menu.php" class="w3-bar-item w3-button">MENU</a>
    <a href="about.php" class="w3-bar-item w3-button">ABOUT</a>
    <a href="contact.php" class="w3-bar-item w3-button">CONTACT</a>
  </div>
</div>
<header class="bgimg w3-display-container" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">Open from 10am to 12pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <p><a href="vegpizzas.php" class="w3-button w3-xxlarge w3-green">I am a Veggie</a></p>
	<p><a href="nonvegpizzas.php" class="w3-button w3-xxlarge w3-red">Non Veg Please</a></p>
  </div>
</header>
<div class="tab-content col-xs-12 pd-N">
              
              <div id="non-veg-pizzas" class="tab-pane fade pizza-items in active">
                <div class="col-xs-12 pd-N visible-xs">
                  <span class="tab-text">Slide me for more types of pizza's</span>
                  <span class="tab-title">non veg pizzas</span>
                </div>
                <div class="col-xs-12 product-box our-menu-box">
                  <div class="row vertical-box displayFlex">
                                        <div class="col-md-4 col-xs-12 col-sm-6">
                      <div class="row">
                        <a href="/menu/non-veg-pizzas/pepper-barbecue-chicken " title="PEPPER BARBECUE CHICKEN">
                          <div><span class="icon-box"><img src="https://www.dominos.co.in//files/items/Pepper_Barbeque.jpg" alt="pepper-barbecue-chicken" title="" class="img-responsive"></span></div>
                          <h1>pepper-barbecue-chicken</h1>
                          <p><span>Pepper Barbecue Chicken I Cheese</span></p>                        </a>
						<button class="btn-1 icon-forward"><span>Order Now</span></button>     
                      </div>
                    </div>
                                        <div class="col-md-4 col-xs-12 col-sm-6">
                      <div class="row">
                        <a href="/menu/non-veg-pizzas/chicken-tikka " title="CHICKEN TIKKA">
                          <div><span class="icon-box"><img src="https://www.dominos.co.in//files/items/Chicken_Tikka.jpg" alt="chicken-tikka" title="" class="img-responsive"></span></div>
                          <h1>chicken-tikka</h1>
                          <p><span>Chicken Tikka I Onion on Makhani Sauce</span></p>                        </a>
						<button class="btn-1 icon-forward"><span>Order Now</span></button>     
                      </div>
                    </div>
                                        <div class="col-md-4 col-xs-12 col-sm-6">
                      <div class="row">
                        <a href="/menu/non-veg-pizzas/chicken-sausage " title="CHICKEN SAUSAGE">
                          <div><span class="icon-box"><img src="https://www.dominos.co.in//files/items/Chicken_Sausage.jpg" alt="chicken-sausage" title="" class="img-responsive"></span></div>
                          <h1>chicken-sausage</h1>
                          <p><span>Chicken Sausage I Cheese</span></p>                        </a>
						<button class="btn-1 icon-forward"><span>Order Now</span></button>     
                      </div>
                    </div>
                                        <div class="col-md-4 col-xs-12 col-sm-6">
                      <div class="row">
                        <a href="/menu/non-veg-pizzas/chicken-golden-delight " title="Chicken Golden Delight">
                          <div><span class="icon-box"><img src="https://www.dominos.co.in//files/items/Chicken_Golden_Delight.jpg" alt="chicken-golden-delight" title="" class="img-responsive"></span></div>
                          <h1>chicken-golden-delight</h1>
                          <p><span style="font-size: small;">Mmm! Barbeque chicken with a topping of golden corn loaded with extra cheese. Worth its weight in gold!</span></p>                        </a>
						<button class="btn-1 icon-forward"><span>Order Now</span></button>     
                      </div>
                    </div>
                                        <div class="col-md-4 col-xs-12 col-sm-6">
                      <div class="row">
                        <a href="/menu/non-veg-pizzas/non-veg-supreme " title="Non Veg Supreme">
                          <div><span class="icon-box"><img src="https://www.dominos.co.in//files/items/Non-Veg_Supreme.jpg" alt="non-veg-supreme" title="" class="img-responsive"></span></div>
                          <h1>non-veg-supreme</h1>
                          <p><span style="font-size: small;">This is as loaded as it gets, folkes! There is hot 'n' spicy chicken with tangy black olives, onions, crisp capsicum &amp; delectable mushrooms. Hey! Did we leave anything out?</span></p>                        </a>
						<button class="btn-1 icon-forward"><span>Order Now</span></button>     
                      </div>
                    </div>
                                        <div class="col-md-4 col-xs-12 col-sm-6">
                      <div class="row">
                        <a href="/menu/non-veg-pizzas/cheese-pepperoni " title="Cheese & Pepperoni">
                          <div><span class="icon-box"><img src="https://www.dominos.co.in//files/items/Pepperoni.jpg" alt="cheese-pepperoni" title="" class="img-responsive"></span></div>
                          <h1>cheese-pepperoni</h1>
                          <p><span style="font-size: small;">An American favourite!</span></p>                        </a>
						<button class="btn-1 icon-forward"><span>Order Now</span></button>     
                      </div>
                    </div>
                    </div>
                    </div>
                </div>
              </div>
			  </div>
			 <footer class="pg-footer col-xs-12 pd-LR" id="footer">
  <div class="row">
    <div class="col-md-5 col-sm-6 col-xs-12 footer-menu col-sm-6 hidden-xs">
      <ul class="nav navbar-nav hidden-xs">
        <li><a href="https://www.7Gpizzas.co.in/blog" title="BLOGS" target="_blank">Blog</a></li>
        <li><a href="http://www.7Gpizzas.com/investors/" title="INVESTORS" target="_blank">Investors</a></li>
        <li><a href="https://www.7Gpizzas.co.in/feedback" title="FEEDBACK">Feedback</a></li>
        <li><a href="https://www.7Gpizzas.co.in/advertisement" title="ADS">Ads</a></li>
        <!--<li><a href="" title="NUTRITION">Nutrition</a></li>-->
      </ul>
    </div>
      <div class="col-md-7 col-sm-6 col-xs-12">
          <div class="col-xs-4 col-sm-6 pd-LR">
              <span class="call-us">
                  <img class="img-responsive" src="https://www.dominos.co.in/theme2/front/images/home/phone-img.png"alt="68886888" title=""/>
              </span>
          </div>
          <div class="col-xs-8 f-social-icon col-sm-6 pull-right">
              <div class="col-xs-12 col-md-10 pd-LR text-right pull-right social-icon">
                <a class="col-xs-6" href="https://twitter.com/7Gpizzas" title="Twitter" target="_blank"><img class="img-responsive" src="https://www.dominos.co.in/theme2/front/images/home/twitter.png" title="Twitter" alt="Twitter"></a>
                  <a class="col-xs-6" href="https://www.facebook.com/7Gpizzas" title="Facebook"target="_blank"><img class="img-responsive" src="https://www.dominos.co.in/theme2/front/images/home/facebook.png" title="Facebook" alt="facebook"></a>
              </div>
          </div>
      </div>  
  </div>
</footer>
  </body>
  </html>
