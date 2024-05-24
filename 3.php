<?php
$arr = array(2,7,1,4,8);

function maximum($array){
    rsort($array);
    $sum = $array[0] + $array[1];
    return $sum;
}

echo maximum($arr);
?>