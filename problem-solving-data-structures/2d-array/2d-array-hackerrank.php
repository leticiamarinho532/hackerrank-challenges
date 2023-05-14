<?php

// $finalArray = [
//     [1, 2, 3, 4, 5, 6],
//     [7, 8, 9, 10, 11, 12],
//     [13, 14, 15, 16, 17, 18],
//     [19, 20, 21, 22, 23, 24],
//     [25, 26, 27, 28, 29, 30],
//     [31, 32, 33, 34, 35, 36]
// ];

$finalArray = [
    [1, 1, 1, 0, 0, 0],
    [0, 1, 0, 0, 0, 0],
    [1, 1, 1, 0, 0, 0],
    [0, 0, 2, 4, 4, 0],
    [0, 0, 0, 2, 0, 0],
    [0, 0, 1, 2, 4, 0]
];

function hourglassSum($arr)
{
    $hourGlassSums = [];
    $arrayCount = count($arr);
    $sum = [];
    $firstColumn = [
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
    ];
    $secondColumn = [
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
    ];
    $thirdColumn = [
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
    ];
    $forthColumn = [
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
    ];

    $firstMiddleColumn  = [
    ];
    $secondMiddleColumn = [
    ];
    $thirdMiddleColumn = [

    ];
    $forthMiddleColumn = [
    ];


    $firstLastColumn = [
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
    ];
    $secondLastColumn = [
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
    ];
    $thirdLastColumn = [
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
    ];
    $forthLastColumn = [
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
    ];

    for ($i = 0; $i < $arrayCount - 2; $i++) {
        array_push($firstColumn[$i], $arr[$i][0], $arr[$i][1], $arr[$i][2]);
        array_push($secondColumn[$i], [$arr[$i][1], $arr[$i][2], $arr[$i][3]]);
        array_push($thirdColumn[$i], [$arr[$i][2], $arr[$i][3], $arr[$i][4]]);
        array_push($forthColumn[$i], [$arr[$i][3], $arr[$i][4], $arr[$i][5]]);
    }

    $test = 0;
    for ($j = 1; $j < $arrayCount - 1; $j++) {
        array_push($firstMiddleColumn, $arr[$j][1]);
        array_push($secondMiddleColumn, $arr[$j][2]);
        array_push($thirdMiddleColumn, $arr[$j][3]);
        array_push($forthMiddleColumn, $arr[$j][4]);
        $test++;
    }

    for ($k = 2; $k < $arrayCount; $k++) {
        array_push($firstLastColumn[$k - 2], $arr[$k][0], $arr[$k][1], $arr[$k][2]);
        array_push($secondLastColumn[$k - 2], $arr[$k][1], $arr[$k][2], $arr[$k][3]);
        array_push($thirdLastColumn[$k - 2], $arr[$k][2], $arr[$k][3], $arr[$k][4]);
        array_push($forthLastColumn[$k - 2], $arr[$k][3], $arr[$k][4], $arr[$k][5]);
    }


    for ($l = 0; $l < $arrayCount - 2; $l++) {
        array_push(
            $sum,
            array_sum($firstColumn[$l]) +
            $firstMiddleColumn[$l] +
            array_sum($firstLastColumn[$l])
        );
        // echo $l . PHP_EOL;
        // var_dump(
        //     array_sum($firstColumn[$l]),
        //     $firstMiddleColumn[$l],
        //     array_sum($firstLastColumn[$l])
        // );

        array_push(
            $sum,
            array_sum($secondColumn[$l]) +
            $secondMiddleColumn[$l] +
            array_sum($secondLastColumn[$l])
        );

        array_push(
            $sum,
            array_sum($thirdColumn[$l]) +
            $thirdMiddleColumn[$l] +
            array_sum($thirdLastColumn[$l])
        );

        array_push(
            $sum,
            array_sum($forthColumn[$l]) +
            $forthMiddleColumn[$l] +
            array_sum($forthLastColumn[$l])
        );
    }

    echo max($sum);

}

hourglassSum($finalArray);
