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
	p.champ{
		margin:0;
		padding:15px;
	}
</style>



<h1 class="col-sm-12 title">Bienvenue sur la page de de contact</h1>
<h2 class="col-sm-12 subtitle">Cette page regroupe plusieurs moyens de contact.</h2>

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
	<form method="post" action="<?php echo strip_tags($_SERVER['REQUEST_URI']); ?>">
		<p>Votre nom : <input type="text" name="nom" size="30" /></p>
		<p>Votre prénom : <input type="text" name="prenom" size="30" /></p>
		<p>Votre email: <span style="color:#ff0000;">*</span>: <input type="text" name="email" size="30" /></p>
		<p>Message <span style="color:#ff0000;">*</span>:</p>
		<textarea name="message" cols="60" rows="10"></textarea>
		<!-- Ici pourra être ajouté un captcha anti-spam (plus tard) -->
		<p><input type="submit" name="submit" value="Envoyer" /></p>
    </form>
</div>




<div class="row col-md-6">
	<a class="button up" href="#top">Retour en haut</a>
</div>
<div class="row col-md-6">
	<a class="button back" href="page.php">Retour à la page "technique"</a>
</div>