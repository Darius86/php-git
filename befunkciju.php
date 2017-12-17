<?php
function tobulas(array $array,$nr){
    $sum=0;
    for($i=0;$i<count($array);$i++){
        $sum+=$array[$i];
    }
    if($sum==$nr) echo $nr.'<br>';
}

function dalikliai(){
    $arr=[];
    for($i=1;$i<=1000;$i++){
        for($x=1;$x<=$i/2;$x++){
            if($i%$x==0){
                array_push($arr,$x);
            }
        }
        tobulas($arr,$i);
        $arr=[];
    }
}
dalikliai();


?>