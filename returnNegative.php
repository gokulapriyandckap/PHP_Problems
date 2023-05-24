<?php

 function returnNegative($num)
{
    if ($num > 0) {
          return $num * -1;
    }
    else{
        return $num;
    }
}
echo returnNegative(-5);