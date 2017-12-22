<?php
/**
 * Postzegel
 */
class Stamp
{

  public $colour = 'blue';
  function __construct($colour) {
    $this->colour = $colour;
  }
  function setcolour($Newcolour){
    $this->colour = $Newcolour;
  }
}


 ?>
