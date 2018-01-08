<?php
include_once("library.class.php");
include_once("book.class.php");

$myBooks = array();
$myBook1 = new Book('Square Foot Gardening', 'Mel Bartholomew', 'When he created the
"square foot gardening" method, Mel Bartholomew, a retired engineer and efficiency expert,
found the solution to the frustrations of most gardeners');
$myBook2 = new Book('Carrots Love Tomatoes', 'Louise Riotte', 'Plant parsley and
asparagus together and you’ll have more of each, but keep broccoli and tomato plants far
apart if you want them to thrive. Utilize the natural properties of plants to nourish the soil,
repel pests, and secure a greater harvest.');
array_push($myBooks, $myBook1, $myBook2);
$myLibrary = new Library($myBooks);

echo $myLibrary->count();
echo "<br>";
$myLibrary->add($myBook1);
echo $myLibrary->count();
echo "<br>";
$myLibrary->add($myBook1);
echo $myLibrary->count();
echo "<br>";
$myLibrary->add($myBook1);
echo $myLibrary->count();
echo "<br>";
$myLibrary->add($myBook1);
echo $myLibrary->count();
echo "<br>";

?>
