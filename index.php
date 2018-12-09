<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <title>YouTube - Un Géant du Web</title>
  </head>
  <body>
  <a id="toTheTop" title="Go to top"><span><i class="fa fa-chevron-circle-up"></i></span></a>
  <?php include('include/header_accueil.php'); ?>
  <div class="container-fluid">
    <div class="row">
      <?php include('include/aside.php'); ?>


      <main class="col-md-8">
        

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

      <aside class="d-none d-md-block col-md-2 aside_right">
          <div class="aside_right_title">
            <span>Powered by</span>
          </div>
          <div class="row description">
            <div class="offset-md-3 col-md-6 col-sm-12">
              <a href="https://fr.wikipedia.org/wiki/HTML5"><img class="ico_langage" src="img/ico_langage/html_ico.png" alt="image barre"/></a>
            </div>
            <div class="col-md-12 col-sm-12 legende">
              <span>HTML 5</span>
            </div>
          </div>

          <div class="row description">
            <div class="offset-md-3 col-md-6 col-sm-12">
              <a href="https://fr.wikipedia.org/wiki/Feuilles_de_style_en_cascade"><img class="ico_langage" src="img/ico_langage/css_ico.png" alt="image barre"/></a>
            </div>
            <div class="col-md-12 col-sm-12 legende">
              <span>CSS3</span>
            </div>
          </div>

          <div class="row description">
            <div class="offset-md-3 col-md-6 col-sm-12">
              <a href="https://fr.wikipedia.org/wiki/JavaScript"><img class="ico_langage" src="img/ico_langage/js_ico.png" alt="image barre"/></a>
            </div>
            <div class="col-md-12 col-sm-12 legende">
              <span>Javascript</span>
            </div>
          </div>

          <div class="row description">
            <div class="offset-md-3 col-md-6 col-sm-12">
              <a href="https://fr.wikipedia.org/wiki/PHP"><img class="ico_langage" src="img/ico_langage/php_ico.png" alt="image barre"/></a>
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
