<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<title>Slim Starter Pack</title>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Slim HTML/CSS est un framework responsive, léger, et pret à l'emploi." />
		<meta name="keywords" content="CSS, grid, grid system, Slim, HTML/CSS, fixed, layout, fluid, responsive, adaptive, design" />
		<meta name="viewport" content="initial-scale=1,minimum-scale=1,width=device-width">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
	</head>

	<body>

		<div class="container">
			<?php include 'menu.php'; ?>
		</div>

		<div class="clear"></div>
		
		 <div class="container">

<?php 

 for($i=0;$i<10;$i++)

 {

 		echo '

		 		<div class="block-coffret">
		 			
		 			<div class="block-image">
		 				<img src="img/coffret.png">
		 			</div>
		 		
		 			<h3>
		 				Coffret <br> Des Iles Vanille <br>
		 				<span>22,00 €</span>
		 			</h3>
		 			<div class="block-content">
		 				<a href="">En savoir plus</a>
		 				<a href="">achat express</a>
		 			</div>
		 	
		 		</div>
		 	';

		 	}
		 	
 ?>
		
			
		</div>

	</body>
</html>