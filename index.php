<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <title>YouTube - Un Géant du Web</title>
  </head>
  <body>

    <div class="container-fluid">
      <div class="row">
        <?php include('include/header_accueil.php'); ?>
      </div>


      <div class="row">
        <?php include('include/aside.php'); ?>

        <main class="col-md-7">
          <div class="d-block d-md-none row">
            <nav class="navigation_partie">
              <ul id="menu-accordeon">
                <li><a href="#">Menu des parties</a>
                  <ul>
                    <li><i class="fa fa-github"></i><a class="col-md-2" href="index.php?partie=1">Histoire</a></li>
                    <li><a class="col-md-2" href="index.php?partie=2"> Le poids dans la société</a></li>
                    <li><a class="col-md-2" href="index.php?partie=3"> Les dangers et limites</a></li>
                    <li><a class="col-md-2" href="index.php?partie=4"> Le métier de youtubeur</a></li>
                    <li><a class="col-md-2" href="index.php?partie=5"> Devenir youtubeur</a></li>
                    <li><a class="col-md-2" href="page.php"> Contactez-nous</a></li>
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
          </div>
        </main>

        <aside class="d-none d-md-block col-md-3">
          Ceci est une playlist fantome lol
        </aside>

      </div>

    </div>

<?php include('include/footer.php'); ?>
</body>
</html>
<br>
<br>
<span class="fas fa-stroopwafel"></span>
<i class="fas fa-stroopwafel"></i>
<i class="fas fa-stroopwafel"></i>
