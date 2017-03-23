
<?php

$arr = array("Nablus"=>"123", "Jenin"=>"456", "Salfit"=>"789");
$city = $_POST['city'];
foreach($arr as $x => $x_value) {
  if ($x == $city){
    echo $x_value ; 
  }
}


?>