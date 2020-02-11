

  <!-- Syntax Highlighter -->
<!--   <link href="css/shCore.css" rel="stylesheet" type="text/css" />
  <link href="css/shThemeDefault.css" rel="stylesheet" type="text/css" /> -->
  <!-- Demo CSS -->
	<link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="js/flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>

</head>
<body class="loading">

  <div id="container" class="cf">


  	<div id="main" role="main">
        <section class="slider">
          <div class="flexslider">
            <ul class="slides">
              <li data-thumb="images/kitchen_adventurer_cheesecake_brownie.jpg">
    	    	    <img src="images/kitchen_adventurer_cheesecake_brownie.jpg" />
    	    		</li>
    	    		<li data-thumb="images/kitchen_adventurer_lemon.jpg">
    	    	    <img src="images/kitchen_adventurer_lemon.jpg" />
    	    		</li>
    	    		<li data-thumb="images/kitchen_adventurer_donut.jpg">
    	    	    <img src="images/kitchen_adventurer_donut.jpg" />
    	    		</li>
    	    		<li data-thumb="images/kitchen_adventurer_caramel.jpg">
    	    	    <img src="images/kitchen_adventurer_caramel.jpg" />
    	    		</li>
            </ul>
          </div>
        </section>

      </div>

  </div>

  <!-- jQuery -->


  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="js/shCore.js"></script><!-- if required -->
  <script type="text/javascript" src="js/shBrushXml.js"></script>
  <script type="text/javascript" src="js/shBrushJScript.js"></script><!--  -->

  <!-- Optional FlexSlider Additions -->
<!--   <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.mousewheel.js"></script>
  <script defer src="js/demo.js"></script> -->
