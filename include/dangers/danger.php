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
  include('include/dangers/presentation.php');
  break;

  case 1:
  include('include/dangers/partie1.php');
  break;

  case 2:
  include('include/dangers/partie2.php');
  break;

  case 3:
  include('include/dangers/partie3.php');
  break;

  case 4:
  include('include/dangers/partie4.php');
  break;
}

?>
