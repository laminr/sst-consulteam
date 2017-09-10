<?php 
	session_start (); 
	$_SESSION['nav'] = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html>
<head>
	<!--
	Image and Website design property of Thibault de Lambilly
	background-image: linear-gradient(to bottom, #2EA76D, #094916);
	-->
	<title>Consulteam - Formation professionnels de la s&eacute;curité du travail et associ&eacute;</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="css/details.css" media="all">
	<?php include "common-css.php" ?>

	<!-- Modernize must be after css and before body-->
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
</head>
<body id="details">
	 <!--[if lt IE 7]><p class=chromeframe>Your browser is <strong>ancient!</strong> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<header class="container">
		<?php include "nav.php" ?>
	</header>
	<!-- MAIN -->
	<div class="container">
		
		<section id="SST" name="SST" class="clearfix">
			<h1>Risque professionnel en <strong class="black">Entreprise</strong></h1>
			<div class="row">
				<div class="span7 padding-plus">
					<div class="row">
						<div class="span7">
							<p>
								Nos consultants se déplacent sur tout le territoire et en entreprises afin d’évaluer les risques sur vos postes de travail avant d’établir le document unique.
							</p>
							<p>
								C’est un service supplémentaire qui permet un pré-audit, une identification sérieuse et préventive des accidents du travail.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="span7 value-row">
							<i>Dur&eacute;e</i>
							<span class="pull-right bold">1 à 3 jours</span>
						</div>
						<div class="span7 value-row">
							<i>Public</i>
							<span class="pull-right bold">Toute entreprise</span>
						</div>
						<div class="span7 value-row">
							<i>Pr&eacute;-requis</i>
							<span class="pull-right bold">Aucun</span>
						</div>
					</div>
				</div>
				<div class="span5">
					<div class="logo-formation">
						<img class="center" src="img/logo-SST.png" alt="logo SST">
					</div>
				</div>
			</div>
		</section>	
		<section class="schedule" name="schedule">
			<h3>Planning</h3>
			<div class="row">
				<div class="span12 value-row">
					<i>Particuliers & Entreprise dans nos locaux</i>
					<button class="btn btn-validate pull-right bold">reservation</button>
				</div>
				<div class="span12 value-row">
					<i>Entreprise - session de formation dans vos locaux</i>
					<button class="btn btn-validate pull-right bold">reservation</button>
				</div>				
			</div>
		</section>
	</div>
	<!-- FOOTER -->
	<footer>
		<?php include "footer.php" ?>
	</footer>
	<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
