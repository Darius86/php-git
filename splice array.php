<?php
$a=array(-10,0,2,9,-5);
for ($z=0;count($a)>$z;$z=0){
    $x=0;
    for ($i=1;$i<count($a);$i++){
        if($a[$i]>$a[$x]){
            $x=$i;
        }
    }
    echo $a[$x]." ";
    array_splice($a,$x,1);
}
?>