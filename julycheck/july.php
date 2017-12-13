<?php
function julymonth($testMonth) {
  if ($testMonth == '07') {
    echo "It's July, so it can get really hot.";
  } else {
    echo "It’s not July, so at least we're not in the peak of the heat.";
  }
}

$m=date("m", mktime(11, 14, 54, 8, 12, 2017));
julymonth($m);
echo "<br>";
echo $m;
echo "<br>";
$m=date("m", mktime(11, 14, 54, 7, 12, 2017));
julymonth($m);
echo "<br>";
echo $m;
echo "<br>";
julymonth(date("m"));
 ?>
