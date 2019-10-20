<!DOCTYPE html>


<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Astrologie Orion</title>
        
        <?php 
    if (isset($_GET['submit']))
    {
        $nom = $_GET['Nom'];
        $prenom = $_GET['Prenom'];
        $datefete = $_GET['bday'];
        
    }
?>
                <script language="javascript" type="text/javascript" src="fonctions/assignationSigne.js"></script>
		<link rel="shortcut icon" href="imageweb\astronomy.png" type="image/x-icon"/>
		<link rel ="stylesheet" href="StyleSheet.css" />
		<!--[if lt IE 9]
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
        <![endif]-->
    </head>
    <body onload='analyseDate(<?php echo $datefete ?>)'>
        <div id="Banner">
<?php include('fonctions\header.php')
?>
			<br>
			<section id="Content">
				<article id="Horos">
					
                                    <h1><?php echo $prenom ." ". $nom ?>, VOUS ÊTES <b id='signe1'></b></h1>				
					<h2><img src="imageweb\astronomy.png" alt="Astral" title="Astral"/> Climat Astral <img src="imageweb\astronomy.png" alt="Astral" title="Astral"/></h2>
					<p>Vous faites preuve de fermeté et ce n'est pas pour déplaire à ceux qui ont l'intention de réaliser des projets en votre compagnie. Les décisions sont prises rapidement et vous agissez sans hésitation. Votre énergie est impressionnante cette semaine et vous n'avez aucun mal à la gérer avec intelligence. Quelle que soit l'activité que vous entreprenez, vous êtes efficace.</p>
					<hr>
					<h2><img src="imageweb\amour.png" alt="Amour" title="Amour"/> Amour <img src="imageweb\amour.png" alt="Amour" title="Amour"/></h2>					
					<p>Ne vous laissez pas entraîner par votre imagination, faites place à la réflexion, même s'il est difficile de garder les pieds sur terre. Vous devez lâcher du lest et faire preuve de souplesse pour supporter une ambiance un peu débridée dans vos relations affectives. Vous devez vous adapter à toutes les situations et apporter un peu de fantaisie dans votre quotidien.</p>
					<hr>	
					<h2><img src="imageweb\travail.png" alt="Travail" title="Travail"/> Travail <img src="imageweb\travail.png" alt="Travail" title="Travail"/></h2>					
					<p>Si vous souhaitez progresser et améliorer votre statut, mettez les bouchées doubles, passez à la vitesse supérieure. Le succès semble à portée de main et vous n'avez visiblement qu'à vous réjouir de la complicité actuelle des astres. Sans doute un peu monopolisé par les remous à gérer en famille, vous n'avez guère la tête au travail mais il faut maintenir à flot vos projets.</p>
					<hr>
					<h2><img src="imageweb\conseil.png" alt="Conseils" title="Conseils"/> Conseils de la semaine <img src="imageweb\conseil.png" alt="Conseils" title="v"/></h2>
					<p>La semaine promet d'être constructive si vous entretenez votre enthousiasme et que vous prenez soin des personnes qui participent à vos projets. Vous avez l'occasion de défendre vos valeurs avec courage et loyauté envers vos proches. N'hésitez pas à relever les défis qui vous sont proposés, vous avez toutes les chances de remporter la victoire.</p>
					<hr>
					<h2><img src="imageweb\argent.png" alt="Argent" title="Argent"/> Argent <img src="imageweb\argent.png" alt="Argent" title="Argent"/></h2>
					<p>Pour vous permettre de conserver une belle stabilité financière vous avez encore quelques efforts à faire mais vous êtes sorti de la période galère, votre budget est en nette amélioration, vous pouvez commencer à faire des projets de vie. Si l'envie vous prend, vous pouvez dépenser comme bon vous semble, même pour des achats coup de coeur ! L'argent rentre sur votre compte, et en plus il fait des petits.</p>
					<hr>
					<h2> <img src="imageweb\forme.png" alt="Forme" title="Forme"/> Forme <img src="imageweb\forme.png" alt="Forme" title="Forme"/></h2>	
					<p>Votre dynamisme cette dernière semaine d'avril pourrait vous échapper un peu. Les abus d'alcool et autres mets trop gras ou trop copieux nuisent à votre silhouette et à votre vitalité tout entière ! Peut-être serait-il judicieux de calmer votre appétit généreux mais trop riche pour opter pour une alimentation légère, en buvant beaucoup d'eau. Vous avez raison d'aimer le plaisir de la table, mais pour le conserver longtemps, veillez à rester raisonnable !</p>
					<br>
					
				</article>
				
				<aside>
					<div id="Info">
						<h3>Informations générales</h3>
						<a href="https://mon.astrocenter.fr/astrologie/mag/E0152-origines-signes-astrologiques"><img src="imageweb\histoirehoros.jpg"/><p>Histoire horoscope</p></a>
						<a href="http://blog.christophervoyance.com/bases-tarot-voyance/"><img src="imageweb\tarot.jpg"/><p>Tarot</p></a>
						<a href="https://auroraclerc.com/mythologie-zodiaque/"><img src="imageweb\mythologie.png"/><p>Mythologie</p></a>
						<a href="http://www.ohsosteffany.com/visit-fortune-teller/"><img src="imageweb\mrisaac.jpg"/><p>Comment Réagir</p></a>
					</div>
				</aside>
			</section>
			
<?php include('fonctions\footer.php')
?>
    </body>
</html>


