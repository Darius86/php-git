<?php

$array = [
    [3, 4, 6, 4],
    [5, 6, 2, 1],
    [1, 4, 7, 4]
];

$maxSum = 0;

for ($j = 0; $j < count($array[0]); $j++) {
    $sum = 0;

    for ($i = 0; $i < count($array); $i++) {
        $sum += $array[$i][$j];
    }

    if ($sum > $maxSum) {
        $maxSum = $sum;
    }

    echo ($j + 1) . " stulpelio suma: {$sum}<br>";
}

echo "<br>Didziausia stulpelio suma: {$maxSum}";

?>
