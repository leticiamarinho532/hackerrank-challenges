<?php

function staircase($n)
{
    $emptySpaces =  str_repeat(' ', $n - 1);
    $hashTag = '#';
    $response = '';

    for ($i = 0; $i < $n; $i++) {
        $response = $response . $emptySpaces . $hashTag . PHP_EOL;

        $hashTag = str_repeat('#', $i + 2);
        $emptySpaces = substr($emptySpaces, 1);
    }

    echo $response;
}

$n = $argv[1];

staircase($n);
