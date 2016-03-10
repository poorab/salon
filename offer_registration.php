<!DOCTYPE HTML>
<?php
	include 'includes/connect.inc.php';

	if (isset($_POST['offer_registration'])) {
		if (isset($_POST['service_id']) && isset($_POST['offer_message']) && isset($_POST['offer_quantity']) && isset($_POST['type'])) {

			$service_id = $_POST['service_id'];
			$offer_message = $_POST['offer_message'];
			$offer_quantity = $_POST['offer_quantity'];
			$type = $_POST['type'];

			$query = mysqli_query($con, "INSERT INTO `offer`(`offer_id`, `service_id`, `offer_message`, `offer_quantitiy`, `type`, `valid_upto`) VALUES ('', '$service_id', '$offer_message', '$offer_quantitiy', '$type', '')") or die(mysqli_error($con));

			if ($query) {
				echo $offer_message." successfully registered.";

				header("location: index.php");
			}
			else {
				echo "Offer registration failed.";
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
						<h3>Add new offer</h3>
					</div>
					<form action="#" method="POST" role="form" class="form-horizontal">
						<div class="top-margin form-group">
							<label class="col-sm-2 control-label">
								Select Service
							</label>
							<div class="col-sm-10">
								<select class="form-control" name="service_id">
									<?php 
						                $selectServicesQuery = mysqli_query($con, "SELECT DISTINCT * FROM `service`");
						                while ($serviceRow = mysqli_fetch_assoc($selectServicesQuery)) {
						                	$serviceIdValue = $serviceRow['service_id'];
						                	$serviceNameValue = $serviceRow['service_name'];
							                echo "<option value=".$serviceIdValue.">".$serviceNameValue."</option><br>";
						                }
						               ?>
								</select>
							</div>
						</div>

						<div class="top-margin form-group">
							<label class="col-sm-2 control-label">
								Offer Message
							</label>
							<div class="col-sm-10">
								<input type="text" rows="3" class="form-control" name="offer_message">
							</div>
						</div>

						<div class="top-margin form-group">
							<label class="col-sm-2 control-label">
								Quantity (in %/Rs.)
							</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="offer_quantity">
							</div>
						</div>

						<div class="top-margin form-group">
							<label class="col-sm-2 control-label">
								Type
							</label>
							<div class="col-sm-10">
								<select class="form-control" name="type">
									<option value="amount">Amount (in Rs.)</option>
									<option value="percent">Percent (in %)</option>
								</select>
							</div>
						</div>
						<!--
						<div class="form-group">
							<label for="date-picker-1" class="col-sm-2 control-label">
								Expiry Date
							</label>
							<div class="col-sm-10">
								<input class="date-picker form-control" name="expiry_date" type="date">
								<label for="date-picker-1" class="input-group-addon btn">
									<span class="glyphicon glyphicon-calendar"></span>
								</label>
							</div>
						</div>-->

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<input class="btn btn-action" type="submit" name="offer_registration" value="Register">
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>

		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	    <script type="text/javascript" src="js/jquery.min.js"></script>

	    <script type="text/javascript">
	    	$(".date-picker").datepicker();

	    	$(".date-picker").on("change", function () {
			    var id = $(this).attr("id");
			    var val = $("label[for='" + id + "']").text();
			    $("#msg").text(val + " changed");
			});
	    </script>
	</body>
</html>