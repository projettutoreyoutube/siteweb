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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/script.js"></script>
  <script src="js/pdfobject.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/mystyle.css">
	<link rel="stylesheet" href="css/style.css">
	<title>YouTube - Un Géant du Web</title>
</head>

<body id="top">
  <a id="toTheTop" title="Go to top"><span><i class="fa fa-chevron-circle-up"></i></span></a>
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
