<?php
function compareTriplets($a, $b) {
    $alice =0;
    $bob = 0;
for($i = 0; $i < count($a); $i++){
     if ($a[$i] > $b[$i]) {
        $alice ++;
     }
     else if($a[$i] < $b[$i]){
        $bob ++;
     }
}
echo $alice,$bob;
}
compareTriplets([5,6,7],[3,6,10]);
?>