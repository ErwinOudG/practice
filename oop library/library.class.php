<?php
include_once("./book.class.php")
//
// * Library of books
//
class Library
{
  protected $countbookinlib = 0;
  protected $librarybooks;

  function __construct($ar_book) {
    $this->$countbooksinlib = count($ar_book);
    $this->librarybooks = $ar_book;
  }

  public function add($book) {
    $this->$countbooksinlib++;
    array_push($this->librarybooks,$book);
  }

  public function remove($book) {
    $this->$countbooksinlib--;
    return "removed";

  }
  public function search($book) {
    return "zoek";
  }

  public function count() {
    return $this->countbooksinlib;
  }

  public function read($booknumber) {
    return $this->ar_book[$booknumber];
  }

}


 ?>
