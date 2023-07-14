<?php

function keyboardRow($array){
    $firstRow = ["q","w","e","r","t","y","u","i","o","p"];
    $secondRow = ["a","s","d","f","g","h","j","k","l"];
    $thirdRow = ["a","s","d","f","g","h","j","k","l"];

    for ($i=0; $i < count($array) ; $i++) { 
        for ($j=0; $j < strlen($array[$i]) ; $j++) { 
           
            echo $array[$i][$j]."\n";
        }
    }
}
keyboardRow(["alaska","dad"]);