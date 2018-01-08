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
$myBook3 = new Book("Going Postal", "Terry Pratchett", "As with many of the Discworld novels, the story takes place in Ankh-Morpork, a powerful city-state based on the historical and modern settings of various metropolises like London or New York City. The protagonist of the story is Moist von Lipwig, a skilled con artist who was to be hanged for his crimes, but saved at the very last moment by the cunning and manipulative Patrician Havelock Vetinari, who has Moist's death on the scaffold faked.");
array_push($myBooks, $myBook1, $myBook2);
$myLibrary = new Library($myBooks);
echo "<br>";

echo $myLibrary->count();
echo "<br>";
echo $myLibrary->add($myBook1);
echo "<br>";
echo $myLibrary->count();
echo "<br>";
echo $myLibrary->add($myBook1);
echo "<br>";
echo $myLibrary->count();
echo "<br>";
echo $myLibrary->add($myBook3);
echo "<br>";
echo $myLibrary->count();
echo "<br>";
echo $myLibrary->count();
echo "<br>";

echo $myLibrary->read(0);
echo "<br>";

echo $myLibrary->read(1);
echo "<br>";

print_r($myLibrary->search("Carrots"));
echo "<br>";
print_r($myLibrary->search("Foot"));
echo "<br>";

echo $myLibrary->count();
echo "<br>";

echo $myLibrary->remove($myBook1);
echo "<br>";
echo $myLibrary->count();
echo "<br>";
print_r($myLibrary->search("Foot"));
echo "<br>";



?>
