<?php
foreach ($mokiniai as $key => $value) {
    $maxvid = 0;
    echo '<tr>';
    echo '<td>' . $value['vardas'] . '</td>';
    foreach ($value['pazymiai'] as $key2 => $value2) {
        echo '<td>';
        $sum = 0;
        foreach ($value2 as $pazymys) {
            echo ' ' . $pazymys . ' ';
            $sum += $pazymys;
        }
        echo '</td>';
        $vid = $sum / count($value2);
        echo '<td>' . round($vid, 2) . '</td>';
        $maxvid += $vid;
    }
    $maxvid = $maxvid / count($value['pazymiai']);
    echo '<td>' . round($maxvid, 2) . '</td>';
}
echo '</tr>';

?>