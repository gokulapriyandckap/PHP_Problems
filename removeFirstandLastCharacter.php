<?php
function remove_char(string $s): string {
   $result = '';
for($i=0 ; $i < strlen($s);$i++){
    if($i !== 0 && $i !== strlen($s) -1){
        $result .= $s[$i];
    }
}  
return $result;
}
echo remove_char("gokul");
