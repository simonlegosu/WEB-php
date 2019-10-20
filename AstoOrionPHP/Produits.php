<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Astrologie Orion</title>
		<link rel="shortcut icon" href="imageweb\astronomy.png" type="image/x-icon"/>
		<link rel ="stylesheet" href="StyleSheet.css" type="text/css"/>
		<!--[if lt IE 9]
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
        <![endif]-->
    </head>
    <body>
        <div id="Banner">

<?php include('fonctions\header.php')
?>
			<br>
			<section id="Content">
				<article>
                                    					
					<br>
<?php include('fonctions\database.php') 
?>

                                    
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
