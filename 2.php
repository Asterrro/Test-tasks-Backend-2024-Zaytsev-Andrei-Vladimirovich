<?php

$arr_1 = array(2,4,1,3,2,4,6,7,9,2,19);
$arr_2 = array(2,1,4,3,6,9);

function sorting($array_1, $array_2){
    $result = array();
    for($i=0; $i < count($array_2); $i++){
        $value = $array_2[$i];
        $values_count = array_count_values($array_1);
        $count = $values_count[$value];
        for($j=0; $j < $count; $j++){
            array_push($result, $value);
        }
    }
    $res = array_diff(array_unique($array_1), $array_2);
    print_r($res);
    $result = array_merge($result, $res);

    return $result;
}

print_r(sorting($arr_1,$arr_2));