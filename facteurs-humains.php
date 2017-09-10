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
	<title>Consulteam - Formation aux Facteurs Humains</title>
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
			<h1>Formation aux <strong class="black">Facteurs Humains</strong></h1>
			<div class="row">
				<div class="span7 padding-plus">
					<div class="row">
						<div class="span7">
						<p>
							Nous vous proposons cette formation qui correspond en terme pédagogique à la contribution humaine impliquée dans un événement, incluant l'erreur humaine.
						</p>
						<p>
							Le <em>facteur humain</em> concerne également, en psychologie, les mécanismes qui existent entre ce qui est perçu par l'homme et les réactions conscientes ou inconscientes qui en découlent. 
						</p>
						<p>
							Par exemple l'émotion créée par la vue d'une photographie d'art ou par l'écoute d'une mélodie faisant intervenir de nombreux éléments mis en mémoire, et notamment son vécu, est une activité incluse dans les facteurs humains. La compréhension de ses mécanismes fait partie des facteurs humains. 
						</p>
						<p>
							Le facteur humain concerne également l'étude des raisons aboutissant à une erreur humaine. On peut citer comme exemple les <em>erreurs de pilotage, les erreurs judiciaires, ou les erreurs de programmation</em>.
						</p>
						</div>
					</div>
					<div class="row">
						<div class="span7 value-row">
							<i>Dur&eacute;e</i>
							<span class="pull-right bold">14 heures</span>
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
						<img class="center" src="img/facteurs-humains.png" alt="facteurs humains">
					</div>
				</div>
			</div>
		</section>	
		<section id="type" name="type">
			<div class="row">
				<div class="span6 padding-plus">
					<h4>Formation en entreprise (INTRA)</h4>
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
				<div class="span6">
					<h4>Formation des particuliers (INTER)</h4>
					<p>
						Nous organisons régulièrement des sessions de formations pour particuliers au sein de l'une de nos salles de formations.
					</p>
					<p>
						Nous disposons de différentes salle localisées en ile-de-france, selon les dates de formations.
					</p>
					<p>Nous pouvons aussi organiser sur demande des formations dans toute la France</p>
				</div>
			</div>
		</section>	
		<section class="schedule" name="schedule">
			<h3>Nous contacter</h3>
			<div class="row">
				<div class="span12 value-row">
					<i>R&eacute;servation</i>
					<a class="btn btn-validate pull-right bold" href="contact.php">demande de contact</a>
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
