<?php
if(isset($_GET['subpart'])){
  $subpart = $_GET['subpart'];
}
else{
  $subpart = 0;
}
?>

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
