<?php
function diagonalDifference($arr) {
$count = count($arr);
$sumOfLeftDiagonal = 0;
$sumOfRightDiagonal = 0;
    for ($i=0; $i < count($arr); $i++) { 
        for ($j=0; $j < count($arr) ; $j++) { 
           if($i == $j) {
            $sumOfRightDiagonal += $arr[$i][$j];
           }
           if ($i == $count-1-$j) {
            $sumOfLeftDiagonal += $arr[$i][$j];
           }
           
        } 
     }
     $result = $sumOfRightDiagonal - $sumOfLeftDiagonal;
     return abs($result);
}
diagonalDifference([
    [1,2,3],
    [4,5,6],
    [9,8,9]
  ]);
