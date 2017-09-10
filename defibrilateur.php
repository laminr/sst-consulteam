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
	<title>Consulteam - Vente et formation de D&eacute;fibrilateur </title>
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
			<h1>D&eacute;fibrilateur <strong class="black"></strong></h1>
			<div class="row">
				<div class="span7 padding-plus">
					<div class="row">
						<div class="span7">
							<p>
								La d&eacute;fibrillation pr&eacute;coce associ&eacute;e &agrave; la r&eacute;animation cardio-pulmonaire augmente fortement les chances de survie d'une personne en arr&ecirc;t cardio-respiratoire qui pr&eacute;sente une fibrillation ventricu-laire, principale cause de mort subite chez l'adulte.
							</p>
							<p>
								<h4>Nos proposition une formation pratique et ciblée</h4>
							</p>
							<p>
								<ol>
									<li>la reconnaissance de l'arrêt cardio-respiratoire chez l’adulte </li>
									<li>l'appel immédiat des secours</li>
									<li>le massage cardiaque externe le plus continu possible</li>
									<li>l'utilisation aussi précoce que possible du DA</li>
								</ol>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="span7 value-row">
							<i>Dur&eacute;e</i>
							<span class="pull-right bold">3 heures max.</span>
						</div>
						<div class="span7 value-row">
							<i>Groupe</i>
							<span class="pull-right bold">10 &agrave; 12 pers. maximum</span>
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
		<section id="type" name="type">
			<div class="row">
				<div class="span6">
					<div class="padded-right">
						<h3>Formation en entreprise</h3>
						<p>
							Vous &ecirc;tes une entreprise et vous voudriez organiser des formations à l'utilisation de d&eacute;fibrilateur pour votre personnel.
						</p>
						<p>
							Nous formons au sein de vos entreprises les gestes d'utilisations, pour vos employ&eacute;s, en formation initial ou les renouvellements 
	                	</p>
	                	<p>
	                		Vous nous fournissez un salle, avec un minimum d'espace et d'&eacute;quipement informatique. Nous nous occupons du reste.
	                	</p>
                	</div>
				</div>
				<div class="span6">
					<div class="padded-left">
						<h3>Formation des particuliers</h3>
						<p>
							Nous organisons r&eacute;gulièrement des sessions de formations pour particuliers au sein de l'une de nos salles de formations.
						</p>
						<p>
							Nous disposons de diff&eacute;rentes salle localis&eacute;es en ile-de-france, selon les dates de formations.
						</p>
						<p>Nous pouvons aussi organiser sur demande des formations dans toute la France</p>
					</div>
				</div>
			</div>
		</section>	
		<section class="schedule" name="schedule">
			<h3>Commander</h3>
			<div class="row">
				<div class="span12 value-row">
					<i>Faire une demande d'information</i>
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
