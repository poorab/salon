<!DOCTYPE HTML>
<?php
	include 'includes/connect.inc.php';
?>

<!--
	Colorized by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Salon website</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">

    
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>

		<style>
         #foot{

			  position: relative;
			  background-color: #ffffff;

         }

		         
		.button {
		    background-color: #4CAF50;
		    border: none;
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;

		}



		.logoutLblPos{

		   position:fixed;
		   right:10px;
		   top:5px;
		}
		


		</style>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
		<div id="header">
			<div id="logo-wrapper">
				<div class="container">		
					<!-- Logo -->
					<div id="logo">
						<h4><a href="#">Salon Website</a></h4>

						<!---LOGOUT -->
						<form align="right" name="form1" method="post" action="log_out.php">
						  	<label class="logoutLblPos">
						  		<input name="submit2" type="submit" id="submit2" value="log out">
						  	</label>
						</form>
						<!--- LOGOUT-->
						<span></span>
					</div>
				</div>
			</div>
		</div>
		<section>
			<div class="container">
				<!-- Nav -->
				<h2>Administrative Settings</h2>
				<a href="service_registration.php" class="btn btn-primary">Register Service</a>
				<a href="offer_registration.php" class="btn btn-primary">Register Offer</a>
			</div>
		</section>
		<!-- Header -->
			
		<!-- Banner -->
		
		<!-- /Banner -->

		<!-- Main -->
			<!-- Main Content -->
			




			<!-- /Main Content -->

		<!-- /Main -->



		<!-- Footer -->
		<div id="foot">
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="6u">
							<section>
								<header>
									<h2></h2>
								</header>
								<a href="#" class="image full"><img src="images/pics05.jpg" alt=""></a>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		<!-- /Footer -->

		<!-- Copyright -->

		<!-- Footer -->
		<div id="foot_link">
			<br>
			<center>
			 <a href="http://twitter.com/minimalmonkey" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
			 <a href="http://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
			 <a href="http://plus.google.com" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
	    	</center>		
				
		
			<!-- /Footer -->

			<!-- Copyright -->
			<div id="copyright">
				<div class="container">
					<div class="row">
						<section class="12u"> 		
							<!--Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>) -->
							<center>
							<td><td><td><p style="color:White;">Copyright. 2016 Salons Pvt Ltd</p>
							</center>

							<p style="color:White;">9/2, Rishi market palasia , Indore (m.p.)</p>
							<p style="color:White;">contact- 7415282271</p>
						</section>
					</div>
				</div>
			</div>
	    </div>

	    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	    <script type="text/javascript" src="js/jquery.min.js"></script>

	</body>
</html>