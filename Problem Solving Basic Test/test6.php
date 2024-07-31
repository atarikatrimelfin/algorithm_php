<?php
function calculateProportions($arr) {
  $positiveCount = 0;
  $negativeCount = 0;
  $zeroCount = 0;

  foreach ($arr as $num) {
    if ($num > 0) {
      $positiveCount++;
    } elseif ($num < 0) {
      $negativeCount++;
    } else {
      $zeroCount++;
    }
  }

  $totalElements = count($arr);
  $positiveProportion = number_format($positiveCount / $totalElements, 6);
  $negativeProportion = number_format($negativeCount / $totalElements, 6);
  $zeroProportion = number_format($zeroCount / $totalElements, 6);

  return [$positiveProportion, $negativeProportion, $zeroProportion];
}

$arr = [-4, 3, -9, 0, 4, 1];
list($positive, $negative, $zero) = calculateProportions($arr);

echo "Positive Proportion: " . $positive . PHP_EOL;
echo "Negative Proportion: " . $negative . PHP_EOL;
echo "Zero Proportion: " . $zero . PHP_EOL;
?>