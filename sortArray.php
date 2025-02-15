<?php
$arr = [10,30,51,50,70,90];

print_r(selectSecondValue($arr));

function selectSecondValue(array $array): int
{
    if(count($array) < 2){
        echo "The array needs more values";
    }

    $top1 = $top2 = null;

    foreach($array as $value){
        if($top1 === null || $value > $top1){
            $top2 = $top1;
            $top1 = $value;
        }elseif ($top2 === null || ($value > $top2 && $value < $top1)){
            $top2 = $value;
        }
    }

    return $top2;
}

?>