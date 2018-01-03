<?php
//
// * Calculator
//
class Calculator
{
  protected $value1;
  protected $value2;

  function __construct($value1, $value2) {
    $this->value1 = $value1;
    $this->value2 = $value2;
  }
  public function add() {
    return $this->value1 + $this->value2;
  }
  public function subtract() {
    return $this->value1 - $this->value2;

  }
  public function multiply() {
    return $this->value1 * $this->value2;

  }
  public function divide() {
    if ($this->value2 == 0) {
      return "divide by zero";
    } else {
      return $this->value1 / $this->value2;
    }
  }

}


 ?>
