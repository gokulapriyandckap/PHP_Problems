<?php


// my solution
// function stringRepeat($n,$str){
//     for ($i=0; $i < $n; $i++) { 
//         echo $str;
//     }
// }

//codewars Solution
function stringRepeat($n,$str){
    $result = "";
    for ($i=0; $i < $n; $i++) { 
        $result .= $str;
    }
    return $result;
}

echo stringRepeat(5,"#");

