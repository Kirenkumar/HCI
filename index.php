<!DOCTYPE html>
<html>
<title>7G Pizzas</title>
<link rel="icon" href="http://payforpizza.com/wp-content/uploads/2013/12/pizza.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">

<link href="pizza-customization.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="style.css" media="all"/>
 <link rel="stylesheet" href="bootstrap.css" media="all"/>

<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("https://media.licdn.com/mpr/mpr/AAEAAQAAAAAAAAnMAAAAJGVjOGM4NjJjLTQwNTQtNGYxOC05ODU1LTQ3ZmVhMWVhYjg5MQ.jpg");
    min-height: 90%;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="index.html" class="w3-bar-item w3-button">HOME</a>
    <a href="menu.php" class="w3-bar-item w3-button">MENU</a>
    <a href="about.php" class="w3-bar-item w3-button">ABOUT</a>
    <a href="contact.php" class="w3-bar-item w3-button">CONTACT</a>
  </div>
</div>
  
<!-- Header with image -->
<header class="bgimg w3-display-container" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">Open from 10am to 12pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-small" style="font-size:100px">thin<br>CRUST PIZZA</span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>thin<br>CRUST PIZZA</b></span>
    <p><a href="menu.php" class="w3-button w3-xxlarge w3-black">Let me see the menu</a></p>
  </div>
</header>
<footer class="pg-footer col-xs-12 pd-LR" id="footer">
  <div class="row">
    <div class="col-md-5 col-sm-6 col-xs-12 footer-menu col-sm-6 hidden-xs">
      <ul class="nav navbar-nav hidden-xs">
        <li><a href="https://www.dominos.co.in/blog" title="BLOGS" target="_blank">Blog</a></li>
        <li><a href="http://www.jubilantfoodworks.com/investors/" title="INVESTORS" target="_blank">Investors</a></li>
        <li><a href="https://www.dominos.co.in/feedback" title="FEEDBACK">Feedback</a></li>
        <li><a href="https://www.dominos.co.in/advertisement" title="ADS">Ads</a></li>
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
                <a class="col-xs-6" href="https://twitter.com/dominos_india" title="Twitter" target="_blank"><img class="img-responsive" src="https://www.dominos.co.in/theme2/front/images/home/twitter.png" title="Twitter" alt="Twitter"></a>
                  <a class="col-xs-6" href="https://www.facebook.com/dominospizzaindia" title="Facebook"target="_blank"><img class="img-responsive" src="https://www.dominos.co.in/theme2/front/images/home/facebook.png" title="Facebook" alt="facebook"></a>
              </div>
          </div>
      </div>  
  </div>
</footer>


<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
</script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
