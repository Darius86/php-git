<?php
for($x=1;$x<=1000;$x++){
    $sum=0;
    for($y=1;$y<=($x/2);$y++){
        if($x%$y==0){
            $sum+=$y;
        }
    }
    if($sum==$x){
        echo $x.'<br>';
    }
}
?>