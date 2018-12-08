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
  include('include/histoire/presentation.php');
  break;

  case 1:
  include('include/histoire/partie1.php');
  break;

  case 2:
  include('include/histoire/partie2.php');
  break;

  case 3:
  include('include/histoire/partie3.php');
  break;

  case 4:
  include('include/histoire/partie4.php');
  break;
}

?>
