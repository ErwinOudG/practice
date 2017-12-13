<?php

    function proof17($zt){
      echo $zt;
      if (preg_match('/^\d{17}$/', $zt)) {
        $proof = 0;
        for ($i=1; $i < 17 ; $i++) {
          $proof += substr($zt,-$i,1) * $i;
        }
      } else {
        echo " fail, not 17 long <br>";
      }
		$result = $proof % 17;
      if ($result > 0) {
        echo " fail, not 17 proof <br>";
      } else {
        echo " ok <br>";
      }
    }

    // 4 keer met een ander getal
    proof17(92651109849327956);
    proof17(92651109849427955);
    proof17(9265110984932795);
    ?>
