<?php
function simpleArraySum($ar) {
$sum = 0;
foreach($ar as $value){
$sum+=$value;
}
return $sum;
}
simpleArraySum([1,2,3]);