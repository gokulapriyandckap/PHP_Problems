<?php
function no_space($string){
    $result ="";
    for($i = 0; $i < strlen($string); $i++){
        if($string[$i] !== " "){
          $result .= $string[$i];
  }
  }
  echo $result;
  }
  no_space("gog          klu      ");