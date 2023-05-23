<?php
function staircase($n) {
        for($i=$n;$i>0;$i--){
            for($j=0;$j<$n;$j++){
               if($j < $i -1){
                   echo " ";
               }
               else{
                   echo "#";
               }
            }
          echo ""."\n";
        }
    }
    staircase(6);