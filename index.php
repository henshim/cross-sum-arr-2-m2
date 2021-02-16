<?php
function crossSum($arr)
{
    $sum1 = 0;
    $sum2 = 0;
    for ($i = 0, $j = count($arr) - 1; $i < count($arr), $j >= 0; $i++, $j--) {
        $sum1 += $arr[$i][$j];
        $sum2 += $arr[$i][$j];
    }
    echo 'left to right ' . $sum1 . '<br>';
    echo 'right to left ' . $sum2 . '<br>';
}

$arr = [[1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]];
crossSum($arr);