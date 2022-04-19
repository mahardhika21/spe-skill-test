<?php

function findNeedle($items, $search){
    $idx = 0;
    $index = [];
    $result = null;
    foreach ($items as $item) {
        if($item == $search) {
            $result = $search;
            array_push($index, $idx);
        }
        $idx++;   
    }
    
    if($result != null) {
       echo "This function should return ". implode(" ", $index) . " as the index of the needle ". $result;
    } else {
        echo "not found";
    }
}
findNeedle(["blue", "red", "blcak", "grey"], "blue");


?>