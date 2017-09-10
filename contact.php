<?php 
	require 'class/tools.class.php';
	require 'class/emailTools.class.php';

	session_start (); 
	$_SESSION['nav'] = basename($_SERVER['PHP_SELF']);

	// adresse de la page
	$current_url = explode("?", $_SERVER['REQUEST_URI']);;
	$webPageUrl = 'http://'.$_SERVER['HTTP_HOST'] . $current_url[0] ;

	$isGettingEmail = false;

    if ( isset ($_POST['firstname']) AND isset ($_POST['lastname'])) {
        $emailCheck = new emailTools;
        $isGettingEmail = $emailCheck->processEmail('contactForm');
    }
    //var_dump($isGettingEmail);
?>
<!DOCTYPE html>
<html>
<head>
	<!--
	Image and Website design property of Thibault de Lambilly
	-->
	<title>Consulteam - Formation professionnels de la s&eacute;curité du travail et associ&eacute;</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="css/details.css" media="all">
	<?php include "common-css.php" ?>

	<!-- Modernize must be after css and before body-->
	<script type="text/javascript" src="js/modernizr.custom.js"></script>

	<?php 
		$newToken = Tools::generateFormToken('contactForm'); 
	?>

</head>
<body id="details">
	 <!--[if lt IE 7]><p class=chromeframe>Your browser is <strong>ancient!</strong> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<header class="container">
		<?php include "nav.php" ?>
	</header>
	<!-- MAIN -->
	<div class="container">
		<section class="clearfix">
			<h1>Contact</h1>
			<form class="well span8 offset2" method="POST" >
			  <div class="row">
					<div class="span3">
						<label>Pr&eacute;nom</label>
						<input type="text" class="span3" placeholder="votre pr&eacute;nom" name="firstname" required="required"/>
						<label>Nom de famille</label>
						<input type="text" class="span3" placeholder="votre nom de famille" name="lastname" required="required" />
						<label>Email</label>
						<input type="email" class="span3" placeholder="votre adresse email" name="sender-email" required="required"/>
						<label>T&eacute;l&eacute;phone de contact</label>
						<input type="tel" class="span3" placeholder="votre t&eacute;l&eacute;phone de contact" name="sender-phone"/>						
					</div>
					<div class="span5">
						<label>Message</label>
						<textarea name="message" id="message" class="input-xlarge span5" rows="10"></textarea>
					</div>

					<input type="hidden" name="URL-main" value="<?php echo $webPageUrl ?>">
					<input type="hidden" name="token" value="<?php echo $newToken; ?>">
					<input type="hidden" name="type" value="contact">

					<button type="submit" class="btn btn-primary pull-right " data-loading-text="Message en cours d'envoie...">Envoie</button>
				</div>
			</form>			
		</section>
	</div>
	<div id="modal-message" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <h3 id="myModalLabel">Demande de contact</h3>
	  </div>
	  <div class="modal-body" style="font-size: 2em; text-align: center;">
	    <p>Votre message &agrave; &eacute;t&eacute; transmis!</p>
	    <p>Merci de votre int&eacute;r&ecirc;t</p>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true" onclick="javascript:window.location.href='index.php';">Retour &agrave; l'acceuil</button>
	  </div>
	</div>
	<!-- FOOTER -->
	<footer>
		<?php include "footer.php" ?>
	</footer>
	<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<?php
	if ($isGettingEmail==true) {
	?>
	<script type="text/javascript">
		$('#modal-message').modal();
	</script>
	<?php } ?>	
</body>
</html>
