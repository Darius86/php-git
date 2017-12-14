<?php
function arrayAverage($array){
    $suma=0;
    for($i=0; $i<count($array);$i++){
        $suma+=$array[$i];
    }
    $average=$suma/count($array);
    return $average;
}
$array=[1,2,4];
echo arrayAverage($array);
?>