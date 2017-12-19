<?php
$a = [[1, 3, 4], [2, 5], [2 => 3, 5 => 8], [1, 1, 5 => 1]];
$max = 0;
foreach ($a as $value) {
    $sum = 0;
    foreach ($value as $value2) {
        $sum += $value2;
    }
    if ($sum > $max) {
        $max = $sum;
    }
}
echo $max;

?>
