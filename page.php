<?php

if (isset($_GET['article'])) {
    $article = $_GET['article'];
} 
else {
    $article = '0';
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="js/bootstrap.js"></script>
</head>

<body id="top">

	<?php
		include 'Include/header_q.php';
	?>

	<div class="container mid" >
		<main class="col-md-12 main">
			<div class="row col-md-12 content">
				<?php

				switch($article) // affichage sur la page
				{ 

				case 0: 
					include 'Include/base.php'; // page normale
				break;

				case 1:
					include 'Include/rapport.php'; // page chaines ?
				break;

				case 2:
					include 'Include/site.php'; // page des caractéristiques du site
				break;

				case 3:
					include 'Include/groupe.php'; // page présentation du groupe
				break;

				case 4:
					include 'Include/contact.php'; // page contact
				break;

				case 5:
					include 'Include/bestof.php'; // page page best of sondages
				break;

				}

				?>
			</div>
		</main>
	</div>

	<?php
		include 'Include/footer_q.php';
	?>
	
</body>

</html>