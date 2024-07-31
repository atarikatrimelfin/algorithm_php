<?php

function sumExcept($number) {
  $sum = 0;
  $numbers = [];
  for ($i = 1; $i <= 5; $i++) {
    if ($i != $number) {
      $sum += $i;
      $numbers[] = $i;
    }
  }
  return [$sum, $numbers];
}

for ($number = 1; $number <= 5; $number++) {
  list($sum, $numbers) = sumExcept($number);
  echo "Sum everything except $number, the sum is " . implode(" + ", $numbers) . " = " . $sum . PHP_EOL;
}

?>
