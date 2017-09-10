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
	<title>Consulteam - Conception de document unique</title>
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
			<h1>Conception de <strong class="black">document unique</strong></h1>
			<div class="row">
				<div class="span7 padding-plus">
					<div class="row">
						<div class="span7">
							<p>
								En France, le document unique, ou <em>document unique d'évaluation des risques</em> (<strong>DU</strong> ou <strong>DUER</strong>), a été créé par le décret n° 2001-1016 du 5 novembre 2001. 							
							</p>
							<p>
								Le décret a transposé la directive européenne sur la prévention des risques professionnels.
							</p>
							<p>
								L'élaboration et la mise à jour de ce document s'imposent à l'employeur pour toute entreprise de plus d'un salarié. C'est un outil permettant d'engager une démarche de prévention dans l’entreprise et de la pérenniser.
							</p>
							<p>
								 Le document unique doit être revu au minimum chaque année et à chaque fois qu'une unité de travail a été modifiée. Il doit également être revu après chaque accident du travail								
							</p>
						</div>
					</div>
					<div class="row">
						<div class="span7 value-row">
							<i>Dur&eacute;e</i>
							<span class="pull-right bold">1 jour d'audit</span>
						</div>
						<div class="span7 value-row">
							<i>Public</i>
							<span class="pull-right bold">Toute entreprises</span>
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
			<h3>Nous contacter</h3>
			<div class="row">
				<div class="span12 value-row">
					<i>Demande de devis </i>
					<a class="btn btn-validate pull-right bold" href="contact.php">contact</a>
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
