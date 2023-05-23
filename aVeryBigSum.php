<?php
function aVeryBigSum($ar) {
    $sum = 0;
    $n = count($ar);
 for($i=0;$i < $n;$i++){
     $sum = $sum+$ar[$i];
 }
  echo $sum;
}
aVeryBigSum([1001,1002,1003,1004,1005]);