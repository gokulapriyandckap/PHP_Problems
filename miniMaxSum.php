<?php
function miniMaxSum($arr) {
  $max = max($arr);
  $min = min($arr);
  $sumOfMax = 0;
  $sumOfMin = 0;
  foreach($arr as $values){
    if ($values !== $max) {
        $sumOfMax += $values;
    }
    if($values !== $min){
        $sumOfMin += $values;
    }
  }
return $sumOfMax." ".$sumOfMin;
}
echo miniMaxSum([1,2,3,4,5]);