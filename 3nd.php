<?php
$array=[
    [5,4,2],
    [7,2,6],
    [9,8,9]
];
for($i=0;$i<count($array);$i++){
    for($j=0;$j<count($array[$i]);$j++){
        if($array[$i][$j]%2==0){
            echo --$array[$i][$j];
            echo " ";
        }else {echo ++$array[$i][$j]." ";}
    }
};


?>