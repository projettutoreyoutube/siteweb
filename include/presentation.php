<p class="col-sm-12 paragraph">
	<div class="row col-lg-12 miniatures">
		<div class="col-lg-4 col-md-6 raccourci">
			<div class="lien">
				<a class="img" href="index.php?partie=1"><img class="background" src="img/histoire/histoire_presentation.jpg" alt="background pour lien"></a>
				<a class="raccourci" href="index.php?partie=1">Histoire</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 raccourci">
			<div class="lien">
				<a class="img" href="index.php?partie=2"><img class="background" src="img/poids/poids_presentation.jpg" alt="background pour lien"></a>
				<a class="raccourci" href="index.php?partie=2">Poids dans la société</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 raccourci">
			<div class="lien">
				<a class="img" href="index.php?partie=3"><img class="background" src="img/dangers/dangers_presentation.jpeg" alt="background pour lien"></a>
				<a class="raccourci" href="index.php?partie=3">Les dangers et les limites</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 raccourci">
			<div class="lien">
				<a class="img" href="index.php?partie=4"><img class="background" src="img/metier/metier_presentation.png" alt="background pour lien"></a>
				<a class="raccourci" href="index.php?partie=4">Notre équipe</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 raccourci">
			<div class="lien">
				<a class="img" href="page.php"><img class="background" src="img/miniatures/banner-minia.png" alt="background pour lien"></a>
				<a class="raccourci" href="page.php">Partie Technique</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 raccourci">
			<div class="lien">
				<a class="img" href="page.php?article=4"><img class="background" src="img/miniatures/contact-minia.jpg" alt="background pour lien"></a>
				<a class="raccourci" href="page.php?article=4">Nous contacter</a>
			</div>
		</div>
</div>
</p>

<div class="slideshow-container">
  <div class="mySlides fade">
    <a href="http://www.iut-bm.univ-fcomte.fr/pages/fr/dpt-info---actualites-17109.html"><img src="img/logo_info.png" width="80%" height="20%"></a>
 </div>

 <div class="mySlides fade">
   <a href="https://www.youtube.com/"><img src="img/yt_carousel.png" width="50%" height="50%"></a>
 </div>


<script type="text/javascript">
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000);
}
</script>
</div>
