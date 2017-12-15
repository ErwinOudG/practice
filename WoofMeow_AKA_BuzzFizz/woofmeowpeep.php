<?php
echo "<br>";
for ($i=1; $i <= 100 ; $i++) {
    $x = TRUE;
    if (fmod($i,3) == 0){
        echo " woof ";
        $x = FALSE;
    }
    if (fmod($i,5) == 0){
        echo " meow ";
        $x = FALSE;
    }
    if (fmod($i,7) == 0){
        echo " peep ";
        $x = FALSE;
    }
    if ($x) {
        echo $i;
    }
    echo "<br>";
}
?>
