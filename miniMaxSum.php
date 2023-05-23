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
    if ($min == $max) {
        $sumOfMax += $values;
        $sumOfMin += $values; 
    }
  }
  if ($min == $max) {
    return $sumOfMax - $max." ".$sumOfMin - $min;
  }
    return $sumOfMax ." ".$sumOfMin ;
}
echo miniMaxSum([5,5,5,5,5]);