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
<title>Consulteam - Formation professionnels de la s&eacute;curit&eacute; du travail et associ&eacute;</title>
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
		<section>
			<h1 class="black">S&eacute;curit&eacute; au travail</h1>

			<section id="SST" name="SST" class="clearfix">
				<h2>Formation <span class="black">SST</span></h2>
				<div class="row">
					<div class="span8 padding-plus">
						Le moniteur forme durant une dur&eacute;e minimum de 12 heures des  sauveteurs secouristes du travail (SST), capables d’intervenir durant un temps de pr&eacute;sence au sein d’une entreprise pour porter secours à toute victime d’un accident du travail ou d’un malaise, dans l’attente de l’arriv&eacute;e des secours sp&eacute;cialis&eacute;s
					</div>
					<div class="span4">
						<div class="value-row">
							<i>Dur&eacute;e</i>
							<div class="pull-right text-right">
								<div>Initial : <span class="bold">2 jours</span></div>
								<div>Recyclage : <span class="bold">7 heures</span></div>
							</div>
							<div class="clearfix"></div>	
						</div>

						<div class="value-row">
							<i>Nbr. Stagiaires</i>
							<span class="pull-right bold">4 &agrave; 10 pers.</span>
						</div>
						<div class="value-row">
							<i>Tarif</i>
							<div class="pull-right text-right" >
								<div>Initial : <span class="bold">1300 &euro;</span></div>
								<div>Recyclage : <span class="bold">800 &euro;</span></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</section>
			<section id="EPI" name="EPI">
				<h2>Formation <span class="black">EPI</span> - Equipier de 1<sup>er</sup> intervention</h2>
				<div class="row">
					<div class="span8 padding-plus">
						<p>
							L’ensemble du personnel, devant être form&eacute; à la s&eacute;curit&eacute; incendie et à la manipulation des moyens de première intervention, doit être en mesure de combattre tout d&eacute;part d’incendie (selon l’article R. 4227-39 du Code du travail).
						</p>
						<p>
							Les &eacute;quipiers de première intervention (EPI) recoivent une formation  complète sur la d&eacute;marche coordonn&eacute;e d’intervention et de lutte contre l’incendie. Ils viennent renforcer les t&eacute;moins du d&eacute;but de l’incendie avec les moyens d’intervention disponibles sur place. Ils se coordonnent &eacute;ventuellement avec d’autres &eacute;quipiers et ils sont susceptibles de guider les secours ext&eacute;rieurs et de faire un rapport de la situation.
						</p>
					</div>
					<div class="span4">
						<div class="value-row">
							<i>Dur&eacute;e</i>
							<span class="pull-right bold">3 heures</span>
						</div>
						<div class="value-row">
							<i>Nbr. Stagiaires</i>
							<span class="pull-right bold">4 &agrave; 10 pers.</span>
						</div>
						<div class="value-row">
							<i>Pr&eacute;-requis</i>
							<span class="pull-right bold">Aucun</span>
						</div>
						<div class="value-row">
							<i>Tarif</i>
							<span class="pull-right bold">1200 &euro;</span>
						</div>
					</div>				
				</div>
			</section>
			<section id="gestes" name="gestes">
				<h2>Formation <span class="black">Gestes</span> &amp; <span class="black">Postures</span> </h2>
				<div class="row">
					<div class="span8 padding-plus">
						<p>
							Comment adopter les bons gestes durant vos p&eacute;riodes en entreprises ?
						</p>
						<p>
							Une formation de gestes et les postures d’une dur&eacute;e de 7 heures (th&eacute;orie + pratique). Celles-ci adopt&eacute;es pendant le travail peuvent souvent être responsables de troubles musculo-squelettiques (TMS). Ces troubles sont &eacute;troitement li&eacute;s à l’organisation du travail et plus pr&eacute;cis&eacute;ment à celle du poste de travail. 
						</p>
						<p>
							La posture de travail est d&eacute;finie comme l’ensemble des diverses positions physiques adopt&eacute;es par une personne au cours de l’ex&eacute;cution d’une activit&eacute;. La posture peut être soit naturelle, soit volontaire, si l’op&eacute;rateur peut r&eacute;ellement la choisir, soit contraignante dans le cas contraire Le geste, quant à lui, se d&eacute;finit comme l’ex&eacute;cution d’un mouvement programm&eacute; par l’op&eacute;rateur dans un but pr&eacute;cis.
						</p>
					</div>
					<div class="span4">
						<div class="value-row">
							<i>Dur&eacute;e</i>
							<span class="pull-right bold">7 heures</span>
						</div>
						<div class="value-row">
							<i>Nbr. Stagiaires</i>
							<span class="pull-right bold">4 &agrave; 10 pers.</span>
						</div>
						<div class="value-row">
							<i>Tarif</i>
							<span class="pull-right bold">900 &euro;</span>
						</div>
					</div>				
				</div>
			</section>
			<section id="risques-pro" name="risques-pro">
				<h2>Risque <span class="black">Professionnel</span> en <span class="black">Entreprise</span> </h2>
				<div class="row">
					<div class="span8 padding-plus">
						<p>
							Nos consultants se d&eacute;placent sur tout le territoire et en entreprises afin d’&eacute;valuer les risques sur vos postes de travail avant d’&eacute;tablir le document unique.
						</p>
						<p>
							C'est un service suppl&eacute;mentaire qui permet un pr&eacute;-audit, une identification s&eacute;rieuse et pr&eacute;ventive des accidents du travail.
						</p>
					</div>
					<div class="span4">
						<div class="value-row">
							<i>Dur&eacute;e</i>
							<span class="pull-right bold">1 &agrave; 2 jours</span>
						</div>
						<div class="value-row">
							<i>Tarif</i>
							<span class="pull-right bold">Nous contacter</span>
						</div>
					</div>				
				</div>
			</section>
		</section>
		<section>
			<h1 class="black">Secourisme Civile</h1>
	
			<section id="PSC1" name="PSC1">
				<h2>Formation <span class="black">PSC1</span> - Pr&eacute;vention et Secours Civiques</h2>
				<div class="row">
					<div class="span8 padding-plus">
						<p>
							Le Moniteur forme des candidats sans connaissances particulières d’une dur&eacute;e minimum de 10 heures avec pour objectif de pr&eacute;parer le plus grand nombre de citoyens aux rudiments de premiers secours.
						</p>
						<p>
							Cette formation remplace depuis le 1er août 2007 l’attestation de formation aux premiers secours. Elle Permet d'intervenir dans toutes les situations d'accidents, seul et sans mat&eacute;riel.
						</p>
					</div>
					<div class="span4">
						<div class="value-row">
							<i>Dur&eacute;e</i>
							<span class="pull-right bold">7 heures</span>
						</div>
						<div class="value-row">
							<i>Nbr. Stagiaires</i>
							<span class="pull-right bold">4 &agrave; 10 pers.</span>
						</div>
						<div class="value-row">
							<i>Tarif</i>
							<span class="pull-right bold">800 &euro;</span>
						</div>
					</div>				
				</div>
			</section>			
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
