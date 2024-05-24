<?php

$arr = array(3,9,2,1,7,90);
function sorting($array){
    $n = count($array) - 1;
    for ($i = 0; $i < $n; $i++){
        for($j = 0; $j < $n; $j++){
            $temp = $array[$j+1];
            if($temp < $array[$j]){
                $array[$j+1] = $array[$j];
                $array[$j] = $temp;

            }

        }
    }
    echo implode(" ", $array) . "\n";
}


sorting($arr);

sort($arr);
print_r($arr);
?>