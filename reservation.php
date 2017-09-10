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
        $isGettingEmail = $emailCheck->processEmail();
    }

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

    <link rel="stylesheet" href="css/reservation.css" media="all">
    <?php include "common-css.php" ?>

    <!-- Modernize must be after css and before body-->
    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <?php 
        $newToken = Tools::generateFormToken('emailform'); 
    ?>

</head>
<body id="reservation">
     <!--[if lt IE 7]><p class=chromeframe>Your browser is <strong>ancient!</strong> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    <header class="container">
        <?php include "nav.php" ?>
    </header>
    <!-- MAIN -->
    <div class="container">
        <section class="clearfix">
            <h1>Demande de reservation</h1>
            <form class="well span9 offset1" method="POST" >
                <div class="line">
                    <div>
                        <div class="span2">
                            Je suis :
                        </div>
                        <div class="row">
                            <div class="span3">
                                <input type="radio" name="who" value="particulier" id="particulier"> <label for="particulier">Un particulier</label>    
                            </div>
                            <div class="span3">
                                <input type="radio" name="who" value="entreprise" id="entreprise"><label for="entreprise"> Une entreprise</label>
                            </div>         
                        </div>
                    </div>
                </div>
                <div class="line">
                    <div class="span2">int&eacute;ress&eacute; par :</div>
                    <select name="training" id="training" class="span4">
                        <optgroup label="Securite au travail">
                            <option>SST - Sauveteur Secouriste du Travail</option>
                            <option>EPI - Equipier de premiere intervention</option>
                            <option>Gestes et postures</option>
                            <option>Risques professionnels en entreprises</option>
                        </optgroup>
                        <optgroup label="Secourisme Civile">
                            PSC1 - Pr&eacute;vention et secours civiques</option>                  
                        </optgroup>
                        <optgroup label="Accompagnement Entreprises">
                            <option>Conception de document unique</option>
                            <option>Facteurs humains</option>
                            <option>Gestion des conflits</option>
                            <option>Management Op&eacute;rationnel</option>
                        </optgroup>
                    </select>
                </div>
                <div class="line">
                    <div class="span2">
                        donnée :
                    </div>
                    <div class="span3">
                        <input type="radio" name="where" value="in-house" id="in-house"> <label for="in-house">dans vos locaux</label>    
                    </div>
                    <div class="span3">
                        <input type="radio" name="where" value="out-house" id="out-house"><label for="out-house">à l'exterieure</label>
                    </div>         
                </div>
                <div class="line">           
                    <div>
                        <label for="firstname" class="span3">Pr&eacute;nom</label>
                        <label for="lastname" class="span3">Nom de famille</label>
                    </div>
                    <div>
                        <input type="text" class="span3" placeholder="votre pr&eacute;nom" name="firstname"  id="firstname" required="required"/>
                        <input type="text" class="span3" placeholder="votre nom de famille" name="lastname" id="lastname" required="required" />
                    </div>
                    <div>
                        <label for="email" class="span3">Email</label>
                        <label for="sender-phone" class="span3">T&eacute;l&eacute;phone de contact</label>
                    </div>
                    <div>
                        <input type="email" class="span3" id="email" placeholder="votre adresse email" name="sender-email" required="required"/>
                        <input type="tel" class="span3" placeholder="votre t&eacute;l&eacute;phone de contact" name="sender-phone" id="sender-phone"/>
                    </div>
                    <div>
                        <label>Nombre de personne(s)
                            <select name="nbr-person" id="nbr-person" class="span1">
                                <?php for ($i=1; $i < 6; $i++) { 
                                    ?><option><?php echo $i ?></option><?php
                                } ?>
                                <option>+ de 5</option>
                            </select>
                        </label>
                        <label>Message
                            <textarea name="message" id="message" class="input-xlarge span5" rows="5"></textarea>
                        </label>   
                    </div> 
                </div>
                <input type="hidden" name="URL-main" value="<?php echo $webPageUrl ?>">
                <input type="hidden" name="token" value="<?php echo $newToken; ?>">
                <input type="hidden" name="type" value="contact">

                <button type="submit" class="btn btn-primary pull-right " data-loading-text="Message en cours d'envoie...">Envoie</button>
            </form>         
        </section>
    </div>
    <div id="modal-message" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Demande de contact</h3>
      </div>
      <div class="modal-body">
        <p>Votre message à &eacute;t&eacute; transmis!</p>
        <p>Merci de votre int&eacute;rêt</p>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      </div>
    </div>
    <!-- FOOTER -->
    <footer>
        <?php include "footer.php" ?>
    </footer>
    <script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <?php
    if ($isGettingEmail) {
    ?>
    <script type="text/javascript">
        $('#modal-message').modal();
    </script>
    <?php } ?>  
</body>
</html>
