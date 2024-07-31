<?php

function convertTime($time) {
  $parts = explode(":", $time);
  $hour = intval($parts[0]);
  $minute = intval($parts[1]);
  $second = intval($parts[2]);
  $ampm = strtoupper(substr($parts[3], -2));

  if ($ampm === 'PM' && $hour !== 12) {
    $hour += 12;
  } else if ($ampm === 'AM' && $hour === 12) {
    $hour = 0;
  }

  return sprintf("%02d:%02d:%02d", $hour, $minute, $second);
}

$time = "07:05:45PM";

$convertedTime = convertTime($time);

echo $convertedTime;

?>