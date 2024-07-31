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

  $total = count($arr);
  $positiveProportion = number_format($positiveCount / $total, 6);
  $negativeProportion = number_format($negativeCount / $total, 6);
  $zeroProportion = number_format($zeroCount / $total, 6);

  return array(
    "positive" => $positiveProportion,
    "negative" => $negativeProportion,
    "zero" => $zeroProportion
  );
}

$inputArray = array(1, -2, 0, 5, -3, 0, 7);

$proportions = calculateProportions($inputArray);

echo "Proportion of positive values: " . $proportions["positive"] . PHP_EOL;
echo "Proportion of negative values: " . $proportions["negative"] . PHP_EOL;
echo "Proportion of zeros: " . $proportions["zero"] . PHP_EOL;

?>