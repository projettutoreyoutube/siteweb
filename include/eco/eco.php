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
  include('include/eco/presentation.php');
  break;

  case 1:
  include('include/eco/partie1.php');
  break;

  case 2:
  include('include/eco/partie2.php');
  break;

  case 3:
  include('include/eco/partie3.php');
  break;

  case 4:
  include('include/eco/partie4.php');
  break;
}

?>
