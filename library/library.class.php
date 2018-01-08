<?php
include_once("./book.class.php");
//
// * Library of books
//
class Library
{
  protected $librarybooks;

  function __construct($ar_book) {
    $this->librarybooks = $ar_book;
    echo "Library created with number off books : " .count($this->librarybooks);
  }

  public function add($book) {
    for ($i=0; $i < count($this->librarybooks); $i++) {
      if (($book->title() === $this->librarybooks[$i]->title()) &&
         ($book->author() === $this->librarybooks[$i]->author())) {
        return "book (with number : $i) already exists ";
      }
    }
    array_push($this->librarybooks,$book);
    $tresult = $book->title();
    $aresult = $book->author();
    return "Book '$tresult' written by '$aresult' added";
  }

  public function remove($book) {
    for ($i=0; $i < count($this->librarybooks); $i++) {
      if ($book === $this->librarybooks[$i]) {
        unset($this->librarybooks[$i]);
        return "book with number : $i removed";
      }
    }
    return "no books removed";

  }
  public function search($search_text) {
    $result = array_filter($this->librarybooks, function($zoekarch) use ($search_text){
      return ( strpos($zoekarch->title(), $search_text) !== false );
    });
    if (count($result)>0) {
      return $result;
    } else {
      return "$search_text : not found";
    }
  }

  public function count() {
    return "number off books : " .count($this->librarybooks);
  }

  public function read($booknumber) {
    // $myBook = $this->librarybooks[$booknumber];
    return $this->librarybooks[$booknumber]->content();
  }

}


 ?>
