<?php
include_once("./book.class.php")
//
// * Library of books
//
class Library
{
  protected $librarybooks;

  function __construct($ar_book) {
    $this->librarybooks = $ar_book;
  }

  public function add($book) {
    array_push($this->librarybooks,$book);
  }

  public function remove($book) {
    return "removed";

  }
  public function search($book) {
    return "zoek";
  }

  public function count() {
    return count($this->librarybooks);
  }

  public function read($booknumber) {
    return $this->librarybooks[$booknumber];
  }

}


 ?>
