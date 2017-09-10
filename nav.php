<?php 
	$menu = $_SESSION['nav'];
?>
<nav class="navbar">  
  <div class="navbar-inner">  
	<div>
		<a class="brand" href="index.php">
			Consulteam
    	</a>  
  	</div> 
    <ul class="nav">  
	  	<!-- MENU 1 -->
	  	<li class="dropdown">  
	  		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				Nos formations 
				<b class="caret"></b>
	  		</a> 
			<ul class="dropdown-menu"> 
				<li class="nav-header">Securite au travail</li>
		  		<li><a href="nos-formations.php#SST" class="active">SST - Sauveteur Secouriste du Travail</a></li>  
		  		<li><a href="nos-formations.php#EPI">EPI - Equipier de premiere intervention</a></li>
		  		<li><a href="nos-formations.php#gestes">Gestes et postures</a></li>  
		  		<li><a href="nos-formations.php#risques-pro">Risques professionnels en entreprises</a></li>

		  		<li class="nav-header">Secourisme Civile</li>
		  		<li><a href="nos-formations.php#PSC1">PSC1 - Prévention et secours civiques</a></li>  				  		
			</ul>  
		</li>
	  	<li class="dropdown">  
	  		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				Accompagnement Entreprises
				<b class="caret"></b>
	  		</a>
			<ul class="dropdown-menu"> 
		  		<li><a href="conception-document-unique.php">Conception de document unique</a></li>   
		  		<li><a href="facteurs-humains.php">Facteurs humains</a></li> 
		  		<!--
		  		<li><a href="javascript:alert('not yet dude!')">Gestion des conflits</a></li> 
		  		<li><a href="javascript:alert('not yet dude!')">Management Opérationnel</a></li> 				  		
		  		-->
			</ul>    		 
		</li>
		<li>
			<a href="defibrilateur.php" alt="Nos locaux">
				D&eacute;fibrilateur
			</a>
		</li>
		<!-- ABOUT 
	  	<li><a href="contact.php">Contact</a></li>-->
	</ul>
	<div id="nav-link-booking">
		<!--<a href="reservation.php" class="inset-text">Reservation</a>-->
		<a href="contact.php">Contact</a>
	</div>
  </div>  
</nav>