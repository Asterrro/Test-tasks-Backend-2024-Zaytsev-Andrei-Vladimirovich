<?php

$arr = array(2,7,1,4,8);

function find($array, $num){
    sort($array);
    $result = array_search($num, $array);
    if($result == false){
        return -1;
    }else{
        return $result;
    }
}
sort($arr);
print_r($arr);
echo find($arr, 7);
echo "\n";
echo find($arr, 11);
?>