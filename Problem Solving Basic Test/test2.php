<?php

function miniMaxSum($arr) {
    sort($arr);

    $minSum = $arr[0] + $arr[1] + $arr[2] + $arr[3];
  
    $maxSum = $arr[1] + $arr[2] + $arr[3] + $arr[4];
  
    echo $minSum . " " . $maxSum;
  }
  
  $arr = [1, 2, 3, 4, 5];
  miniMaxSum($arr);

?>