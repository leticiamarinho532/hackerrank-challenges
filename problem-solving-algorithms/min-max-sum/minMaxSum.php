<?php

function minMaxSum($arr)
{
    $minValue = 0;
    $maxValue = 0;
    $tempValue = [];
    $countArrayKeys = count($arr) - 1;
    $countArray = count($arr);

    for ($i = 0;$i < $countArray; $i++) {
        $tempSum = array_sum($arr);
        $sum = $tempSum - $arr[$countArrayKeys];

        array_push($tempValue, $sum);

        $countArrayKeys--;
    }

    $minValue = min($tempValue);
    $maxValue = max($tempValue);

    echo $minValue . ' ' . $maxValue . PHP_EOL;
}

$arr = [1,2,3,4,5];

minMaxSum($arr);
