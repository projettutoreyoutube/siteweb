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
