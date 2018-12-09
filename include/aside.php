<?php
if(isset($_GET['partie'])){
  $partie = $_GET['partie'];
}
else{
  $partie = 0;
}
?>
<aside class="d-none d-md-block col-md-2">
  <div class="row">
    <div class="col-md-12 element-center">
      <a href="https://www.youtube.com/"><img src="img/yt_logo.png" alt="logo du projet" width="50" height="50"></a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 element-center">
      <h1>YouTube LLC</h1>
      <h2>San Bruno, CA </h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 element-center">
      <h1>999 MM</h1>
      <h2>Vidéos</h2>
    </div>
    <div class="col-md-6 element-center">
      <h1>2 MM</h1>
      <h2>Abonnés</h2>
    </div>
  </div>
  <div class="row">
    <hr class="col-md-8">
  </div>
  <div class="row">
    <ul class="element-left">
      <li class="histoire"><a href="index.php?partie=1"><i class="fa fa-book-open"></i><span>Histoire</span></a></li>
      <li class="poids"><a href="index.php?partie=2"><i class="fa fa-balance-scale"></i><span>Poids dans la société</span></a></li>
      <li class="danger"><a href="index.php?partie=3"><i class="fa fa-exclamation-triangle"></i><span>Les dangers et limites</span></a></li>
      <li class="metier"><a href="index.php?partie=4"><i class="fa fa-user-tie"></i><span>Le métier de youtubeur</span></a></li>
      <li class="eco"><a href="index.php?partie=5"><i class="fa fa-dollar-sign"></i><span>Modèle économique de YouTube</span></a></li>
      <li class="orga"><a href="index.php?partie=6"><i class="fa fa-sitemap"></i><span>Organisation de l'entreprise YouTube</span></a></li>
      <div class="row">
        <hr class="col-md-8">
      </div>
      <li class="contact"><a href="page.php"><i class="fa fa-comments "></i><span>Contactez-nous</span></a></li>
    </ul>

  </div>

  <div class="row">
    <hr class="col-md-8">
  </div>
</aside>
