<?php
include_once("classes/cl_postzegel.php");
$nvph1 = new Postzegel;
var_dump($nvph1);
$nvph2 = new Postzegel;
$nvph2->setKleur("rood");
var_dump($nvph1);

  ?>
