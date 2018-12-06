<?php
if(isset($_GET['subpart'])){
  $subpart = $_GET['subpart'];
}
else{
  $subpart = 0;
}
?>

<div class="row">
<nav class="navigation">
  <a class="col-md-3 partie" href="index.php?partie=1&subpart=1">Partie1</a>
  <a class="col-md-3 partie" href="index.php?partie=1&subpart=2">Partie2</a>
  <a class="col-md-3 partie" href="index.php?partie=1&subpart=3">Partie3</a>
  <a class="col-md-3 partie" href="index.php?partie=1&subpart=4">Partie4</a>
</nav>
</div>
<?php switch($subpart){
  case 0:
  include('include/societe/presentation.php');
  break;

  case 1:
  include('include/societe/partie1.php');
  break;

  case 2:
  include('include/societe/partie2.php');
  break;

  case 3:
  include('include/societe/partie3.php');
  break;

  case 4:
  include('include/societe/partie4.php');
  break;
}

?>
