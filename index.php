<?php
$a = ['Jonas', 'Petras', 'Antanas', 'Povilas'];
foreach ($a as $key => $value) {
    foreach ($a as $key2 => $value2) {
        if ($value != $value2 && $key < $key2) {
            echo $value . '+' . $value2 . '<br>';
        }
    }
}
echo '<br><br>';
foreach ($a as $value) {
    foreach ($a as $value2) {
        if ($value != $value2) {
            echo $value . '+' . $value2 . '<br>';
        }
    }
}
?>