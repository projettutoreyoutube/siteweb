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
	<title>YouTube - Un géant du web</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body id="top">

	<?php
		include 'include/header_tech.php';
	?>

	<div class="container mid" >
		<main class="col-md-12 main">
			<div class="row col-md-12 content">
				<?php

				switch($article) // affichage sur la page
				{ 

				case 0: 
					include 'include/technique/base.php'; // page normale
				break;

				case 1:
					include 'include/technique/rapport.php'; // page chaines ?
				break;

				case 2:
					include 'include/technique/site.php'; // page des caractéristiques du site
				break;

				case 3:
					include 'include/technique/groupe.php'; // page présentation du groupe
				break;

				case 4:
					include 'contact.php'; // page contact
				break;

				case 5:
					include 'include/technique/bestof.php'; // page page best of sondages
				break;

				}

				?>
			</div>
		</main>
	</div>

	<?php
		include 'include/footer.php';
	?>
	
</body>

</html>