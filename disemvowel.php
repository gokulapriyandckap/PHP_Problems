<?php
class exampleTest{
    public $result;
    public function removalVowels($testCase){
        $this->result ='';
        for ($i = 0; $i < strlen($testCase) ; $i++){

            if ($testCase[$i] != "a" && $testCase[$i] != "e" && $testCase[$i] != "i" && $testCase[$i] != "o" && $testCase[$i] != "u" && $testCase[$i] !=" "){
                $this->result .= $testCase[$i];
            }

        }
        echo $this->result;
    }
}
$object = new exampleTest();
$object->removalVowels("gokulapriya  n");

