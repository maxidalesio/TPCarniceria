<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carnicería Libre</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="css/prettyPhoto.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<?php 
		require("partes/referencias.php");
	?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navigation">
				<div id="barraMenu" class="container">	
					<?php include("partes/menu.php"); ?>				
					<!--
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><h1><span>C</span>arnicería Libre</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.html" class="active">Home</a></li>
								<li role="presentation"><a href="services.html">Services</a></li>
								<li role="presentation"><a href="blog.html">Blog</a></li>
								<li role="presentation"><a href="portfolio.html">Portfolio</a></li>
								<li role="presentation"><a href="contact.html">Contact</a></li>						
							</ul>
						</div>
					</div>
					-->						
				</div>
			</div>	
		</nav>		

   
	<div id="principal" class="container">
	<div class="slider">
		<div class="img-responsive">
			<ul class="bxslider">				
				<li><img src="images/slider/1.jpg" alt=""/></li>								
				<li><img src="images/slider/2.jpg" alt=""/></li>	
				<li><img src="images/slider/3.jpg" alt=""/></li>			
			</ul>
		</div>	
    </div>
	
	
	<div class="container">
		<div class="text-center">
			<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
				<h3>Providing Our Clients</h3>
			</div>
			<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
				<h2>Best & Creative Solutions</h2>
			</div>
		</div>
	</div>
	
	<!--
		<div class="box">
			<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.4s">
				<div class="col-sm-3">
					<i class="fa fa-cogs fa-3x"></i>
					<h4>Creative Solutions</h4>
				</div>
			</div>
			<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.8s">
				<div class="col-sm-3">
					<i class="fa fa-leaf fa-3x"></i>
					<h4>Creative Solutions</h4>
				</div>
			</div>
			<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.2s">
				<div class="col-sm-3">
					<i class="fa fa-heart-o fa-3x"></i>
					<h4>Creative Solutions</h4>
				</div>
			</div>
			<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.6s">
				<div class="col-sm-3">
					<i class="fa fa-laptop fa-3x"></i>
					<h4>Creative Solutions</h4>
				</div>
			</div>
		</div>
	-->
	<div class="features">
		<div class="container">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<h2>Main Features</h2>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
					<p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque<br>
					penat bus maecenas ultrices sed ipsum lorem
					dolor sit amet sed ipsum consectetur<br></p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="col-lg-6 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.5s">
			<img src="images/6.jpg" class="img-responsive" >
		</div>
		
		<div class="col-lg-6 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.5s">
			<img src="images/5.jpg" class="img-responsive" >
		</div>
	</div>
	
	<!--
	<div class="main-feature">
		<div class="container">
			<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
				<div class="media">
					<div class="media-left">					
						<i class="fa fa-rocket fa-3x"></i>
					</div>
					
					<div class="media-body">
						<h4 class="media-heading">SEO Optimized</h4>
						<p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd Lorem ipsum dolor sit ame onsectea dipe.</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
				<div class="media">
					<div class="media-left">					
						<i class="fa fa-camera fa-3x"></i>
					</div>
					
					<div class="media-body">
						<h4 class="media-heading">Easy to Install</h4>
						<p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd Lorem ipsum dolor sit ame onsectea dipe.</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
				<div class="media">
					<div class="media-left">					
						<i class="fa fa-heart-o fa-3x"></i>
					</div>
					
					<div class="media-body">
						<h4 class="media-heading">Unlimited Possibilities</h4>
						<p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd Lorem ipsum dolor sit ame onsectea dipe.</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="text-center">
			<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
				<h2>Easily Customizable & Unlimited Support </h2>
			</div>
			<div class="wow bounceInUp" data-wow-offset="0" data-wow-delay="0.6s">
				<p>Integer orci enim varius vel accumsan vel porttitor tellus. Vivamus odio. Donec metus libero semper</p>
			</div>
			
			<button type="button" class="btn btn-default">Purchase Now</button>
			<button type="button" class="btn btn-default">learn More</button>
		</div>	
		
	</div>
	
	
	<div class="about-us">
		<div class="container">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<h3>What People Are</h3>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
					<h2>Saying About Us</h2>
				</div>
				<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="col-md-3">
						<img src="images/about/man4.jpg" alt="" >
						<h3>John Doe</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
					</div>
				</div>
				
				<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.6s">
					<div class="col-md-3">
						<img src="images/about/man2.jpg" alt="" >
						<h3>John Doe</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
					</div>
				</div>
				
				<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="col-md-3">
						<img src="images/about/man3.jpg" alt="" >
						<h3>John Doe</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
					</div>
				</div>
				
				<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.6s">
					<div class="col-md-3">
						<img src="images/about/man4.jpg" alt="" >
						<h3>John Doe</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
					</div>
				</div>
			</div>	
		</div>
	</div>
	-->
	</div>
	<footer>
		<div class="footer">
			<div class="container">
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
					<h2>Carnicería Libre</h2>
					<p>Lugar para hacer tus pedidos
					con un anticipo mínimo de 5 días.
					Variedad, calidad y envío a domicilio.
					</p>
					
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
					</ul>
				</div>
				
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
					
				</div>
				
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
					<h3>CONTACT INFO</h3>
					<ul>
						<li><i class="fa fa-home fa-2x"></i> Sucre 240</li><hr>
						<li><i class="fa fa-phone fa-2x"></i> +54 4203 3452</li><hr>
						<li><i class="fa fa-envelope fa-2x"></i> carniceria@libre.com</li>
					</ul>
				</div>
				
			</div>
		</div>
		
		<div class="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						&copy; 2015 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">bootstraptaste</a>. All Rights Reserved.
					</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Multi
                    -->
					<div class="col-md-6">
						<ul class="pull-right">
							<li><a href="#">Home</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Portfolio</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="pull-right">
					<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
				</div>
			</div>
		</div>		
	</footer>
   
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->	
    <script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.isotope.min.js"></script> 
	<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
	
  </body>
</html>