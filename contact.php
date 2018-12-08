<style>
	form{
		width:100%;
	}
	a.twitter{
		background-color: #4AB3F4;
		color:white;
		text-decoration: none;
		padding:5px;
		border:solid 1px #4AB3F4;
		border-radius: 20px;
		margin : 5px;
	}
	a.youtube{
		background-color: #FE0000;
		color:white;
		text-decoration: none;
		padding:5px;
		border:solid 1px #FE0000;
		border-radius: 20px;
		margin : 5px;
	}
	div.formulaire{
		padding:15px;
	}

</style>

<?php
$messageMail ;
$erreur;

if(isset($_POST["submit"])){
	require'include/technique/PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	// Paramètres SMTP
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPDebug = 2;
	$mail->SMTPAuth = true;
	$mail->Username = 'projettutytb@gmail.com';
	$mail->Password = 'weshfrate90000';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

	//Mail
	$mail->SetFrom($_POST["email"], $_POST["nom"] . " " . $_POST["prenom"]);
	$mail->Subject = $_POST["objet"];
	$mail->Body = $_POST["message"] . "<br>" . "<br>" . "Informations sur l'expéditeur : " . "<br>" . "Nom complet : " . $_POST["nom"] . " " . $_POST["prenom"] . "<br>" . "Adresse email : " . $_POST["email"]; 
	$mail->AltBody = 'To view the message, please use an HTML compatible email viewer !';
	$mail->AddAddress("projettutytb@gmail.com", 'Projet Tutoré');

	if($mail->Send()){
		$messageMail = "L'email a été envoyé avec succès !";
	} else {
		$messageMail = "L'email n'a pas pu être envoyé. Veuillez réessayer plus tard.";
	}
}
?>


<h1 class="col-sm-12 title">Bienvenue sur la page de de contact</h1>
<h2 class="col-sm-12 subtitle">Cette page regroupe plusieurs moyens de contact</h2>

<div class="col-md-12 contacter row">
	<p class="col-md-6 lien">
		Contactez nous via twitter : <a class="twitter" href="https://twitter.com/TutProject">Twitter</a>
	</p>
	<p class="col-md-6 lien">
		Visitez notre chaîne YouTube : <a class="youtube" href="https://www.youtube.com/channel/UCHhpkykNjsrd858ExVqMtWA?view_as=subscriber">YouTube</a><br />
		<small>Vous trouverez sur notre chaîne YouTube des playlists contenant des vidéos nous ayant aidé à écrire notre rapport.</small>
	</p>
</div>



<div class="col-sm-12 formulaire row">
	<form method="post" action="page.php?article=4">
		<div class="row">
			<p class="col-sm-6">Votre nom : <input type="text" name="nom" id="nom" required></p>
			<?php
				if(isset($_POST["nom"]) && !preg_match("/^[a-zA-Z -]{2,}$/", $_POST["nom"])){
					$erreur["nom"] = "Le nom doit être composé de deux lettres minimum.";
					echo "<br>".$erreur["nom"]."<br>";
				}
				?>
			<p class="col-sm-6">Votre prénom : <input type="text" name="prenom" id="prenom" required></p>
			<?php
				if(isset($_POST["prenom"]) && !preg_match("/^[a-zA-Z -]{2,}$/", $_POST["prenom"])){
					$erreur["prenom"] = "Le prénom doit être composé de deux lettres minimum.";
					echo "<br>".$erreur["prenom"]."<br>";
				}
				?>	
		</div>
		<div class="row">
			<p class="col-sm-12">Votre email : <input type="text" name="email" id="email" required></p>
		</div>

		<label for="objet">Objet : </label>
		<input type="text" name="objet" id="objet" required />

		<div class="row col-sm-12">
			<p class="col-sm-12">Votre message : </p>
			<textarea name="message" id="message" cols="60" rows="10"></textarea>
		</div>


		<div class="row">
		<p class="col-sm-12"><input type="submit" name="submit" value="Envoyer" /></p>
		</div>
		<?php
			if(isset($_POST["submit"])){
				echo $messageMail;
			} 
			?>

	</form>
</div>




<div class="row col-md-6">
	<a class="button up" href="#top">Retour en haut</a>
</div>
<div class="row col-md-6">
	<a class="button back" href="page.php">Retour à la page "technique"</a>
</div>