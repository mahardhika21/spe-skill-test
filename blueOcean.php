<?php
function blueOcean($arr, $arr2) {
    $stat = false;
    $result = [];
    $match = [];
    foreach ($arr as $num1) {
        foreach ($arr2 as $num2) {
            if($num1 == $num2) {
                $stat = true;
                array_push($match, $num2);
            }
        }
        
        if($stat == false) {
            array_push($result, $num1);
        }
    }
    
   echo "Should return [". implode(",", $result)."]". implode($match) ."is present in the second list";
}
blueOcean([1,2,3,4,6,10], [1]);

?>