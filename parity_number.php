<?php

function parity($arr) {
  $a = [];
  $b = [];
  foreach ($arr as $num) {
    if ($num % 2) {
        array_push($a, $num);   
    } else {
        array_push($b, $num);   
    }
  }
  return count($b) === 1 ? $b[0] : $a[0];
}

$arr =[2, 4, 0, 100, 4, 11, 2602, 36];

echo parity($arr);

?>