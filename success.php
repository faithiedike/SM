<!DOCTYPE html>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5shiv.js"></script>
<![endif]-->
<head>
<meta charset="utf-8">
<title>Solomon Max Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="images/favicon.html"/>
<link rel="stylesheet" href="css/style.css" media="screen"/>
<link rel="stylesheet" id="main-color" href="css/colors/blue-color.css" media="screen"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/prettyPhoto.css" media="screen"/>
<link rel="stylesheet" href="css/font-awesome/font-awesome.min.css" media="screen"/>
<link rel="stylesheet" href="css/layer-slider.css" media="screen"/>
<link rel="stylesheet" href="css/flexslider.css" media="screen"/>
<link rel="stylesheet" href="css/fontello/fontello.css" media="screen"/>
<!-- All JavaScript Files (Remove those you will not use)-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- JQUERY JS FILE -->
<script type="text/javascript" src="js/flex-slider.min.js"></script>
<!-- FLEX SLIDER JS FILE -->
<script type="text/javascript" src="js/navigation.min.js"></script>
<!-- MAIN NAVIGATION JS FILE -->
<script type="text/javascript" src="js/jquery.layerslider.js"></script>
<!-- LAYER SLIDER JS FILE -->
<script type="text/javascript" src="js/layerslider.transitions.js"></script>
<!-- LAYER SLIDER TRANSITIONS JS FILE -->
<script type="text/javascript" src="js/map.min.js"></script>
<!-- GOOGLE MAP JS FILE -->
<script type="text/javascript" src="js/jquery.theme.plugins.min.js"></script>
<!-- TRANSITIONS JS FILE -->
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<!-- CAROUSEL SLIDER JS FILE -->
<script type="text/javascript" src="js/prettyPhoto.min.js"></script>
<!-- PRETTYPHOTO JS FILE -->
<script type="text/javascript" src="js/custom.js"></script>
<!-- CUSTOMN JAVASCRIPT JS FILE -->
<meta name="google-site-verification" content="SCtx0-YEwJ18X3_2XuX7X9usvRgcIq-cZtMwCq-nx9A" />
</head>
<body><?php include_once("analyticstracking.php") ?>
<div id="container"><!-- main container starts-->
	<div id="wrapp"><!-- main wrapp starts-->
		<header id="header" style="background:#000;"><!--header starts -->
        
		<div class="container">
			<div id="header-top">
				<a href="index.html" id="logo"><img src="images/logo2.jpg" width="350" height="160" alt=""/></a><!--your logo-->
				<div id="header-links" style="margin-top:0px;">
					<ul class="social-icons header"><!-- header social links starts-->
                    	<li><h4 style="color:#fff;">Contact Phone: <span>+234 818 000 0184</span> | </h4></li>
						<li><a target="_blank" href="https://twitter.com/" style="background:none;"><i class="icon-social-twitter"></i></a></li>
						<li><a target="_blank" href="https://www.facebook.com/pages/Solomon-Max/146574165532300" style="background:none;"><i class="icon-social-facebook"></i>
                        </a></li>
                        <li><a target="_blank" href="https://plus.google.com/u/0/112565495128078644800/about?partnerid=gplp0" style="background:none;">
                        <i class="icon-social-google+"><img src="images/google+.jpg" alt=""/></i></a></li>
						<li><a target="_blank" href="https://www.linkedin.com/uas/login‎" style="background:none;"><i class="icon-social-linkedin"></i></a></li>
					</ul><br/><!--header social links ends -->
					<!--contact phone number-->
					<ul class="social-icons header">
					<li><h4 style="color:#fff;">BB Pin: <span>76BD2F72</span>|</h4></li>
					</ul><!--header social links ends -->
					<!--contact BB Pin-->
				</div>
				<nav class="top-search" style="position:relative;"><!-- search starts-->
				<form action="404-error.html" method="get">
				<button class="search-btn"></button>
				  <input class="search-field" type="text" onBlur="if(this.value=='')this.value='Search';" onFocus="if(this.value=='Search')this.value='';" value="Search"/>
				</form>
				</nav><!--search ends -->
			</div>
		</div>
        
		<div id="main-navigation"><!--main navigation wrapper starts -->
			<div class="container">
				<ul class="main-menu"><!--main navigation starts -->
					<li class="active"><a href="index.html" title="home"><i class="icon-home"></i>Home</a></li>
					<li><a href="about.html"><i class="icon-user"></i>Who we are</a>
					<ul>
						<li><a href="services.html"><i class="icon-wrench"></i>Our Services</a></li>
						<li><a href="vision.html"><i class="icon-desktop"></i>Vision and Mission</a></li>
					</ul>
					</li>
					<li><a href="education.html"><i class="icon-folder-open"></i>Education</a></li>
					
					<li><a href="employers.php"><i class="icon-user"></i>Employers</a></li>
					<li><a href="register.php"><i class="icon-folder-open"></i>Job Seekers</a></li>
					<li><a href="project1.html"><i class="icon-suitcase"></i>Projects</a></li>
                                        <li><a href="blog/" target="_blank"><i class="icon-globe"></i>Blog</a></li> 
					<li><a href="contact.html"><i class="icon-envelope"></i>Contact Us</a></li>
					
				</ul><!-- main navigation ends-->
			</div>
		</div><!--main navigation wrapper ends -->
		
        </header><!-- header ends-->
		
        <div id="content">
        
			<div class="container">
            <div class="one" style="margin-top:20px; min-height:500px;">
            
            <?php
				if($_REQUEST['type']!=''){
					if($_REQUEST['type']=='basic_user'){
						$type = 'Basic User';
					} else if($_REQUEST['type']=='premium_user'){
						$type = 'Premium User';
					} else {
						$type = 'User';	
					}
				} else {
					$type = 'User';	
				}
			?>
            
            	<div class="notification success" style="float:left; width:100%; text-align:center; font-weight:bold; height:80px; line-height:40px;">
                <p style="font-size:20px;"><?=$type?> Registration Successful</p>
                <p>Your information was successfully sent. 
				NOTE: Please send your scanned documents, the uploaded passport and an additional copy of your CV to recruiments@solomonmaxng.com. <br/>Your information will be reviewed and 
                        verified by the verification board of Solomon Max, and if we need any other information, we will contact you. </p>
                </div>
                
                
            </div>
            </div>
            
            
            
            <div id="copyrights"><!-- copyrights starts-->
            <div class="container">
           		<div class="one-half" style="float:left; margin-left:15px;"><p>&copy; Copyright 2013 <a href="index.html">SOLOMON MAX LTD </a>.  Made by <a href="http://coagitsolution.com">COAGIT SOLUTION LIMITED</a></p></div>
            	<div class="one-half last" style="float:left;">
                    <ul class="social-icons footer"><!-- social links starts-->
                        <li><a target="_blank" href="https://twitter.com/" style="background:none;"><i class="icon-social-twitter"></i></a></li>
						<li><a target="_blank" href="https://www.facebook.com/pages/Solomon-Max/146574165532300" style="background:none;"><i class="icon-social-facebook"></i>
                        </a></li>
                        <li><a target="_blank" href="https://plus.google.com/u/0/112565495128078644800/about?partnerid=gplp0" style="background:none;">
                        <i class="icon-social-google+"><img src="images/google+.jpg" alt=""/></i></a></li>
						<li><a target="_blank" href="https://www.linkedin.com/uas/login‎" style="background:none;"><i class="icon-social-linkedin"></i></a></li>
                    </ul><!-- social links ends-->
                </div>
            </div>
            </div><!-- copyrights ends -->
            
		</div><!-- main content starts-->
	</div> <!-- main wrapp starts-->
</div><!-- main container ends-->

</body>

</html>