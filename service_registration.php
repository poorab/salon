<!DOCTYPE HTML>
<?php
	include 'includes/connect.inc.php';

	if (isset($_POST['service_registration'])) {
		if (isset($_POST['service_name']) && isset($_POST['service_description']) && isset($_POST['service_fees'])) {

			$service_name = $_POST['service_name'];
			$service_description = $_POST['service_description'];
			$service_fees = $_POST['service_fees'];

			$query = mysqli_query($con, "INSERT INTO `service`(`service_id`, `service_name`, `service_description`, `fees`) VALUES ('', '$service_name', '$service_description', '$service_fees')") or die(mysqli_error($con));

			if ($query) {
				echo $service_name." successfully registered.";

				header("location: index.php");
			}
			else {
				echo "Service registration failed.";
			}
		}
	}
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
		<br>
		<section>
			<div class="container">
				<div class="row">
					<div>
						<h3>Add new service</h3>
					</div>
					<form action="#" method="POST" role="form" class="form-horizontal">
						<div class="top-margin form-group">
							<label class="col-sm-2 control-label">
								Service Name
							</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="service_name">
							</div>
						</div>

						<div class="top-margin form-group">
							<label class="col-sm-2 control-label">
								Service Description
							</label>
							<div class="col-sm-10">
								<input type="text" rows="3" class="form-control" name="service_description">
							</div>
						</div>

						<div class="top-margin form-group">
							<label class="col-sm-2 control-label">
								Fees
							</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="service_fees">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<input class="btn btn-action" type="submit" name="service_registration" value="Register">
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>

		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	    <script type="text/javascript" src="js/jquery.min.js"></script>

	</body>
</html>