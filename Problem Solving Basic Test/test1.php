<?php

function miniMaxSum($arr) {
    sort($arr);

    $minSum = array_sum(array_slice($arr, 0, 4));

    $maxSum = array_sum(array_slice($arr, 1, 4));

    return $minSum . ' ' . $maxSum;
}

$arr = [1, 3, 5, 7, 9];
$result = miniMaxSum($arr);
echo $result;

?>