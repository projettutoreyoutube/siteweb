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
    <ul>
      <li class="histoire"><a href="index.php?partie=1">Histoire</a></li>
      <li class="poids"><a href="index.php?partie=2"> Le poids dans la société</a></li>
      <li class="danger"><a href="index.php?partie=3"> Les dangers et limites</a></li>
      <li class="metier"><a href="index.php?partie=4"> Le métier de youtubeur</a></li>
      <li class="devenir"><a href="index.php?partie=5"> Devenir youtubeur</a></li>
      <li class="contact"><a href="page.php"> Contactez-nous</a></li>
    </ul>
  </div>
  <div class="row">
    <hr class="col-md-8">
  </div>
</aside>
