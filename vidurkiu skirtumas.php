<?php
$a=array(5,6,10,15);
$b=array(8,5,3,25);

function vidurkis(array $array){
    $sum=0;
    for($x=0;$x<count($array);$x++){
        $sum+=$array[$x];
    }
    $vid=$sum/count($array);
    return $vid;
}
var_dump(vidurkis($a)-vidurkis($b));

?>