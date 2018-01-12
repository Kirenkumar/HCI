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
 <link rel="icon" href="http://payforpizza.com/wp-content/uploads/2013/12/pizza.png">

 
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
<script>
function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}
</script>
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
              
              <div id="veg-pizzas" class="tab-pane fade pizza-items in active">
                <div class="col-xs-12 pd-N visible-xs">
                  <span class="tab-text">Slide me for more types of pizza's</span>
                  <span class="tab-title">veg pizzas</span>
                </div>
                <div class="col-xs-12 product-box our-menu-box">
                  <div class="row vertical-box displayFlex">
                 <div class="col-md-4 col-xs-12 col-sm-6">
                      <div class="row">
                        <a href="/menu/veg-pizzas/margherita " title="Margherita">
                          <div><span class="icon-box"><img src="https://www.dominos.co.in//files/items/Margherit.jpg" alt="margherita" title="" class="img-responsive"></span></div>
                          <h1>margherita</h1>
                          <p><span style="font-size: small;">A hugely popular margherita, with a deliciously tangy single cheese topping</span></p>                        </a>
						<button class="btn-1 icon-forward" onclick="location.href='maghcustomize.html'"><span>Order Now</span></button>     
                      </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6">
                      <div class="row">
                        <a href="/menu/veg-pizzas/double-cheese-margherita " title="Double Cheese Margherita">
                          <div><span class="icon-box"><img src="https://www.dominos.co.in//files/items/Double_Cheese_Margherita.jpg" alt="double-cheese-margherita" title="" class="img-responsive"></span></div>
                          <h1>double-cheese-margherita</h1>
                          <p><span style="font-size: small;">The everpopular Margherita - loaded with extra cheese... oodies of it!</span></p>                        </a>
						<button class="btn-1 icon-forward" onclick="location.href='doublemaghcustomize.html'"><span>Order Now</span></button>     
                      </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6">
                      <div class="row">
                        <a href="/menu/veg-pizzas/farm-house " title="Farm House">
                          <div><span class="icon-box"><img src="https://www.dominos.co.in//files/items/Farmhouse.jpg" alt="farm-house" title="" class="img-responsive"></span></div>
                          <h1>farm-house</h1>
                          <p><span style="font-size: small;">A pizza that goes ballistic on veggies! Check out this mouth watering overload of crunchy, crisp capsicum, succulent mushrooms and fresh tomatoes</span></p>                        </a>
						<button class="btn-1 icon-forward" onclick="location.href='farmcustomize.html'"><span>Order Now</span></button>     
                      </div>
                    </div>
                                        <div class="col-md-4 col-xs-12 col-sm-6">
                      <div class="row">
                        <a href="/menu/veg-pizzas/peppy-paneer " title="Peppy Paneer">
                          <div><span class="icon-box"><img src="https://www.dominos.co.in//files/items/Peppy_Paneer.jpg" alt="peppy-paneer" title="" class="img-responsive"></span></div>
                          <h1>peppy-paneer</h1>
                          <p><span style="font-size: small;">Chunky paneer with crisp capsicum and spicy red pepper - quite a mouthful!</span></p>                        </a>
						<button class="btn-1 icon-forward" onclick="location.href='paneercustomize.html'"><span>Order Now</span></button>     
                      </div>
                    </div>
                                        <div class="col-md-4 col-xs-12 col-sm-6">
                      <div class="row">
                        <a href="/menu/veg-pizzas/mexican-green-wave " title="Mexican Green Wave">
                          <div><span class="icon-box"><img src="https://www.dominos.co.in//files/items/Mexican_Green_Wave.jpg" alt="mexican-green-wave" title="" class="img-responsive"></span></div>
                          <h1>mexican-green-wave</h1>
                          <p><span style="font-size: small;">A pizza loaded with crunchy onions, crisp capsicum, juicy tomatoes and jalapeno with a liberal sprinkling of exotic Mexican herbs.</span></p>                        </a>
						<button class="btn-1 icon-forward" onclick="location.href='mexicancustomize.html'"><span>Order Now</span></button>     
                      </div>
                    </div>
                   <div class="col-md-4 col-xs-12 col-sm-6">
                      <div class="row">
                        <a href="/menu/veg-pizzas/deluxe-veggie " title="Deluxe Veggie">
                          <div><span class="icon-box"><img src="https://www.dominos.co.in//files/items/Deluxe_Veggie.jpg" alt="deluxe-veggie" title="" class="img-responsive"></span></div>
                          <h1>deluxe-veggie</h1>
                          <p><span style="font-size: small;">For a vegetarian looking for a BIG treat that goes easy on the spices, this one's got it all.. The onions, the capsicum, those delectable mushrooms - with paneer and golden corn to top it all.</span></p>                        </a>
						<button class="btn-1 icon-forward" onclick="location.href='deluxecustomize.html'"><span>Order Now</span></button>     
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
