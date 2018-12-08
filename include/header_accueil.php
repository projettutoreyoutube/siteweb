<!-- header -->
<?php if(isset($_GET['partie'])){
  $partie = $_GET['partie'];
}
else{
  $partie = 0;
} ?>

<div class="header_tech">
	<header class="row">
		<div class="col-sm-12 banner">
			<img class="banner" src="img/banner.png" alt="image barre"/>
		</div>

	</header>
</div>

<div class="header_accueil">
	<?php
	switch($partie){
    case 0:
    include('include/navigation/nav_presentation.php');
    break;

		case 1:
		include('include/navigation/nav_histoire.php');
		break;

		case 2:
		include('include/navigation/nav_societe.php');
		break;

		case 3:
		include('include/navigation/nav_dangers.php');
		break;

		case 4:
		include('include/navigation/nav_metier.php');
		break;

		case 5:
		include('include/navigation/nav_devenir.php');
		break;
	}
	?>
</div>
