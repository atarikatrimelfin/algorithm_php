<?php
function timeConversion($s) {
    $timeParts = explode(':', $s);
    $hour = $timeParts[0];
    $minute = $timeParts[1];
    $second = substr($timeParts[2], 0, 2);

    $ampm = substr($s, -2);

    if ($ampm == 'PM' && $hour != '12') {
        $hour = (int)$hour + 12;
    } elseif ($ampm == 'AM' && $hour == '12') {
        $hour = '00';
    }

    return sprintf('%02d:%02d:%02d', $hour, $minute, $second);
}

$s = '12:01:00PM';
$result = timeConversion($s);
echo $result;

$s = '12:01:00AM';
$result = timeConversion($s);
echo $result;

?>