<div class="clear"></div>
<div class="slideshow-container">
  <div class="mySlides fade">
    <a href="http://www.iut-bm.univ-fcomte.fr/pages/fr/dpt-info---actualites-17109.html"><img src="img/logo_info.png" width="600em" height="250em"></a>
 </div>

 <div class="mySlides fade">
   <a href="https://www.youtube.com/"><img src="img/yt_carousel.png" width="250em" height="250em"></a>
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
