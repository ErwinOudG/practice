<?php
//
// * Book
//
class Book
{
  private static $countbooks = 0;
  protected $bookTitle;
  protected $bookAuthor;
  protected $bookContent;

  function __construct($title, $author, $content) {
    self::$countbooks++;
    $this->bookTitle = $title;
    $this->bookAuthor = $author;
    $this->bookContent = $content;
  }
  public function content() {
    return $this->bookContent;
  }

}
?>
