<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
            include('include/devenir/devenir.php');
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
          <div class="img_pub">
            <img class="banner" src="img/oasis.gif" alt="image barre"/>
          </div>
      </aside>

    </div>

  </div>

<?php include('include/footer.php'); ?>
</body>
</html>
