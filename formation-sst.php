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
			<h1>Formation <strong class="black">SST</strong></h1>
			<div class="row">
				<div class="span7 padding-plus">
					<div class="row">
						<div class="span7">
							<p>
								Nous dispensons la <em>formation de sauveteur secouriste du travail</em>, reconnu sous le cigle <strong>SST</strong>
							</p>
							<p>
								Le moniteur forme durant une durée minimum de 12 heures des sauveteurs secouristes du travail (SST), capables d’intervenir durant un temps de présence au sein d’une entreprise pour porter secours à toute victime d’un accident du travail ou d’un malaise, dans l’attente de l’arrivée des secours spécialisés.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="span7 value-row">
							<i>Dur&eacute;e</i>
							<span class="pull-right bold">10 heures</span>
						</div>
						<div class="span7 value-row">
							<i>Public</i>
							<span class="pull-right bold">Tous le personnel</span>
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
		<section id="type" name="type">
			<div class="row">
				<div class="span6">
					<div class="padded-right">
						<h3>Formation en entreprise</h3>
						<p>
							Vous êtes une entreprise et vous voudriez organiser des formations de sauveteur secouriste du travail pour votre personnel.
						</p>
						<p>
							Nous formons au sein de vos entreprises les formations SST, pour vos employés, en formation initial ou les renouvellements 
	                	</p>
	                	<p>
	                		Vous nous fournissez un salle, avec un minimum d'espace et d'équipement informatique. Nous nous occupons du reste.
	                	</p>
                	</div>
				</div>
				<div class="span6">
					<div class="padded-left">
						<h3>Formation des particuliers</h3>
						<p>
							Nous organisons régulièrement des sessions de formations pour particuliers au sein de l'une de nos salles de formations.
						</p>
						<p>
							Nous disposons de différentes salle localisées en ile-de-france, selon les dates de formations.
						</p>
						<p>Nous pouvons aussi organiser sur demande des formations dans toute la France</p>
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
