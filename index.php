<?php
$array=[['jonas, jonaitis,jonasmail,],[antanas, antanaitis, antanmaail,],[petras, petraitis, petrasmail']];
function peopleInfo(array $array){
    for ($i=0; $i<count($array); $i++) {
        echo '<tr>';
        for ($j=0; $j<count($array[$i]); $j++){
            echo '<td>' . $array[$i][$j] . '</td>';
        }
        echo '</tr>';
    }
}







?>


<table>
    <tr>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>El.pastas</th>
    </tr>
    <?php
    peopleInfo($array);
    ?>

</table>