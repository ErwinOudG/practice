<?php
echo "<br>";
for ($i=1; $i <= 100 ; $i++) {
    $x = TRUE;
    if (fmod($i,3) == 0){
        echo " fizz ";
        $x = FALSE;
    }
    if (fmod($i,5) == 0){
        echo " buzz ";
        $x = FALSE;
    }
    if ($x) {
        echo $i;
    }
    echo "<br>";
}
?>
