<?php
function plusMinus(array $arr): void
{
    $n = count($arr);
    $positive = 0;
    $negative = 0;
    $zero = 0;
    
    foreach($arr as $num){
        if ($num > 0) {
            $positive++;
        } elseif ($num < 0) {
            $negative++;
        } else {
            $zero++;
        }
    }
    
    printf("%.6f\n", $positive / $n);
    printf("%.6f\n", $negative / $n);
    printf("%.6f\n", $zero / $n);
}

$arr = [1, 1, 0, -1, -1];
plusMinus($arr);
?>