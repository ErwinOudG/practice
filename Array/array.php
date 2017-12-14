<?php
function sumarr($ar1,$ar2) {
  $ar3 = array();
  for ($i=0; $i < count($ar1) ; $i++) {
    $ar3[$i] = $ar1[$i] + $ar2[$i];
  }
  return $ar3;
}
$array1 = array(5,6,7,8,9,10,11,12,13,14);
$array2 = array(0,2,4,6,8,10,12,14,16,18);
$array3 = sumarr($array1,$array2);
print_r($array3);
 ?>
