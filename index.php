<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <title>YouTube - Un Géant du Web</title>
  </head>
  <body>

  <?php include('include/header_accueil.php'); ?>
  <div class="container-fluid">



    <div class="row">
      <?php include('include/aside.php'); ?>


      <main class="col-md-8">
        <div class="d-block d-md-none row">
          <nav class="navigation_partie">
            <ul id="menu-accordeon">
              <li><a href="#">Menu des parties</a>
                <ul>
                  <li class="histoire"><a href="index.php?partie=1"><i class="fa fa-book-open"></i><span>Histoire</span></a></li>
                  <li class="poids"><a href="index.php?partie=2"><i class="fa fa-balance-scale"></i><span>Le poids dans la société</span></a></li>
                  <li class="danger"><a href="index.php?partie=3"><i class="fa fa-exclamation-triangle"></i><span>Les dangers et limites</span></a></li>
                  <li class="metier"><a href="index.php?partie=4"><i class="fa fa-user-tie"></i><span>Le métier de youtubeur</span></a></li>
                  <li class="eco"><a href="index.php?partie=5"><i class="fa fa-dollar-sign"></i><span>Modèle économique de YouTube</span></a></li>
                  <li class="orga"><a href="index.php?partie=6"><i class="fa fa-sitemap"></i><span>Organisation de l'entreprise YouTube</span></a></li>
                  <li class="contact"><a href="page.php"><i class="fa fa-comments "></i><span>Contactez-nous</span></a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>

        <div class="main_article">
          <?php
          switch($partie){
            case 0:
            include('include/presentation.php');
            break;

            case 1:
            include('include/histoire/histoire.php');
            break;

            case 2:
            include('include/societe/societe.php');
            break;

            case 3:
            include('include/dangers/danger.php');
            break;

            case 4:
            include('include/metier/metier.php');
            break;

            case 5:
            include('include/eco/eco.php');
            break;

            case 6:
            include('include/orga/orga.php');
            break;
          }
          ?>
          <div class="row">
          <div class="col-md-6 element-center">
            <a class="button up" href="#top">Retour en haut</a>
          </div>
          <div class="col-md-6 element-center">
            <a class="button back" href="index.php">Retour à l'accueil</a>
          </div>
        </div>
        </div>
      </main>

      <aside class="d-none d-md-block col-md-2">
          <div class="aside_right_title">
            <span>Powered by</span>
          </div>
          <div class="row description">
            <div class="offset-md-3 col-md-6 col-sm-12">
              <img class="ico_langage" src="img/ico_langage/html_ico.png" alt="image barre"/>
            </div>
            <div class="col-md-12 col-sm-12 legende">
              <span>HTML 5</span>
            </div>
          </div>

          <div class="row description">
            <div class="offset-md-3 col-md-6 col-sm-12">
              <img class="ico_langage" src="img/ico_langage/css_ico.png" alt="image barre"/>
            </div>
            <div class="col-md-12 col-sm-12 legende">
              <span>CSS3</span>
            </div>
          </div>

          <div class="row description">
            <div class="offset-md-3 col-md-6 col-sm-12">
              <img class="ico_langage" src="img/ico_langage/js_ico.png" alt="image barre"/>
            </div>
            <div class="col-md-12 col-sm-12 legende">
              <span>Javascript</span>
            </div>
          </div>

          <div class="row description">
            <div class="offset-md-3 col-md-6 col-sm-12">
              <img class="ico_langage" src="img/ico_langage/php_ico.png" alt="image barre"/>
            </div>
            <div class="col-md-12 col-sm-12 legende">
              <span>PHP</span>
            </div>
          </div>
      </aside>

    </div>

  </div>

<?php include('include/footer.php'); ?>
</body>
</html>
