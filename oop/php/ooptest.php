<?php
include_once("classes/cl_stamp.php");
$nvph1 = new Stamp("blue");
print_r($nvph1);
$nvph2 = new Stamp("green");
print_r($nvph2);
$nvph2->setcolour("red");
print_r($nvph2);
$nvph3 = new Stamp("orange");
print_r($nvph3);

  ?>
