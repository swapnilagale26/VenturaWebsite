<!DOCTYPE html style = "overflow: auto">

<html lang="zxx">
<head>
<title>Ventura Technologies</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/fav_white.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/themify-icons.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
<link rel="stylesheet" type="text/css" href="css/icomoon.css">
<link rel="stylesheet" type="text/css" href="css/plugins.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/rev-settings.css">
<link rel="stylesheet" type="text/css" href="css/styles-2.css" id="main_styles">
<link rel="stylesheet" href="css/custom.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Elephant&display=swap" rel="stylesheet">

</head>
<body>
<!-- <div id="style-switcher">
  <h2>Color Schemes<a href="#"><i class="fa fa-cog fa-spin"></i></a></h2>
  <div>
    <ul class="colors" id="color1">
      <li><a href="#" class="style1"></a></li>
      <li><a href="#" class="style2"></a></li>
      <li><a href="#" class="style3"></a></li>
      <li><a href="#" class="style4"></a></li>
      <li><a href="#" class="style5"></a></li>
      <li><a href="#" class="style6"></a></li>
    </ul>
  </div>
</div> -->
<div id="preloader">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<div class="main-header" style="background-image: url(./img/slider/bg.png)">
<div id="top-bar" class="hidden-md-down">
  <div class="container">
  
  </div>
</div>
<header id="nav-transparent">
  <nav id="navigation4" class="container-fluid navigation">
    <div class="nav-header"><a class="nav-brand" href="index.php"><img src="img/logo.png" class="main-logo" alt="logo" id="main_logo" style="display:block;margin:8px"></a>
      <div class="nav-toggle"></div>
    </div>
    <div class="nav-menus-wrapper">
      <ul class="nav-menu align-to-right">
        <li><div class="dpdw dpbtn"  onclick="myFunction1()" >KNOW VENTURA  <i class="fa fa-caret-down"></i></div>
        <div class="dpdw-content" id="mydpdw">
              <a style="font-weight: 400;font-size:14px" href="knowvt.php">About Us</a>
              <!-- <a href="knowvt.php">KNOW VENTURA</a> -->
            </div>
      </li>
        <!-- <li>
            <div class="dropdown">
            <button class="dropbtn" onclick="myFunction()">KNOW VENTURA
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="myDropdown">
              <a href="#knowvt.php">KNOW VENTURA</a>
            </div>
            </div>
        </li>  -->
        <li><a href="services.php">EXPERTISE</a></li>
        <li><a href="portfolio.php">PORTFOLIO</a></li> 
        <li><a href="resources.php">RESOURCES</a></li>
        <li><a href="career.php">CAREERS</a></li>
        <li class="linkHeader"><a href="index.php#talk" class="btn btn1" style="height: 30px;width: 115px;padding: 0px;margin-top: 10px;">LET'S TALK</a></li>
      </ul>
    </div>
  </nav>
</header>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction1() {
  document.getElementById("mydpdw").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dpbtn')) {
  var myDropdown = document.getElementById("mydpdw");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}

  </script>