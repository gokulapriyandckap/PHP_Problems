<?php

function plusMinus($arr) {
    $countOfPositiveNums = 0;
    $countOfNegativeNums = 0;
    $countOfNullNums = 0;
    
    for ($i=0; $i < count($arr) ; $i++) { 
     if ($arr[$i] < 0) {
        $countOfNegativeNums++;
     }
     elseif ($arr[$i] > 0) {
        $countOfPositiveNums++;
     }   
     else{
        $countOfNullNums++;
     }
    }
    $divisionOfPositive = number_format($countOfPositiveNums / count($arr),6);
    $divisionOfNegative = number_format($countOfNegativeNums / count($arr),6);
    $divisionOfNull = number_format ($countOfNullNums / count($arr),6);
    
    echo $divisionOfPositive."\n".$divisionOfNegative."\n".$divisionOfNull."\n";
}
echo plusMinus([1,1,0,-1,-1]);