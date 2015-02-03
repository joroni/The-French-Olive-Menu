<!DOCTYPE html>
<html lang="ar">
<head>
	<meta charset="UTF-8" />
   <title>The French Olive</title>
	
    <link rel="shortcut icon" href="favicon.png">
	<link rel="icon" href="favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
    

     <link rel="stylesheet" href="css/lightbox.css" @charset="utf-8";>
    <link type="text/css" rel="stylesheet" media="all" href="css/custom.css" @charset="utf-8";>
    <link type="text/css" rel="stylesheet" media="all" href="css/slideshow.css" @charset="utf-8";>
     <link type="text/css" rel="stylesheet" media="all" href="css/menu-gallery.css" @charset="utf-8";>
	<link type="text/css" rel="stylesheet" media="all" href="css/style.css" @charset="utf-8";>
	<link type="text/css" rel="stylesheet" media="all" href="css/responsive.css" @charset="utf-8";>
   
	<script type="text/javascript" src="js/jquery.min.js" charset="utf-8"></script>
    <script src="js/jquery.mobile-1.4.5.min.js" charset="utf-8"></script>
     <script src="js/lightbox.js" charset="utf-8"></script>
     <script type="text/javascript" src="js/navigation.js" charset="utf-8"></script>
	<script type="text/javascript" src="js/script.js" charset="utf-8"></script>
    <style>
    	@font-face {
		  font-family: 'Raleway';
		  font-style: normal;
		  font-weight: 300;
		  src: local('Raleway Light'), local('Raleway-Light'), url(fonts/RalewayLight.woff) format('woff');
		}
		@font-face {
		  font-family: 'Raleway';
		  font-style: normal;
		  font-weight: 400;
		  src: local('Raleway'), url(fonts/Raleway.woff) format('woff');
		}
		@font-face {
		  font-family: 'Raleway';
		  font-style: normal;
		  font-weight: 500;
		  src: local('Raleway Medium'), local('Raleway-Medium'), url(fonts/RalewayMedium.woff) format('woff');
		}

	</style>
 <script type="text/javascript">
    $(function() {
        $('ul li a').click(function(e) {
            e.preventDefault();
            $(this).closest('ul').find('.navlink').removeClass('navlink');
            $(this).parent().addClass('active');
        });
    });
  </script>
</head>

<body>
<div id="ios7-statusbar-fix"></div>
	<div id="w">
		
		<div id="pagebody">
			<header id="toolbarnav">
				<a href="#navmenu" id="menu-btn"></a>
			
				<!--<h1>HK Mobile</h1>-->
			</header>
			
			<section id="content" class="clearfix">
				
				<div class="home">
               <!-- <center>-->
                <img src="img/menu-bg.jpg" />
                  <!--<p class="version">Version 1.0</p>-->
             <!--   </center>-->
                </div>
              
			</section>
		</div>
	
	

        
        
		<div id="navmenu" class="sideajax">

				<div id="banner">
                <header>
				<h1><img src="img/logo.png" /></h1>
				</header>
					</div>
                <nav id="cd-lateral-nav" class="lateral-menu-is-open">
                <?php /*?><header>
				<h1><img src="img/logo.png" /></h1>
				</header><?php */?>
                      <?php include 'menu_list_front.php'; ?>
                </nav>
		</div><!-- /navmenu -->
	</div><!-- /w -->
    
    
    
</body>
 <script type="text/javascript" src="js/jssor.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/jssor.slider.js" charset="utf-8"></script>
    
   <script src="js/ios-orientationchange-fix.js" charset="utf-8"></script> 
     <script>
/*	function myFunction() {*/
 jQuery(function($) {
		$("#navmenu").overflowY = "scroll";
	/*}*/
	});
	</script>
     <!--   <script src="js/jquery.swipebox.min.js"></script> 
        <script type="text/javascript">
            jQuery(function($) {
            	$(".swipebox").swipebox();
            });
        </script>-->
        
   
</html>

