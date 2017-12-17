<?php
$array=[
    [1,5,8,4],
    [5,7,6,5],
    [9,1,8,9]
];
$col=0;
$max=0;
for($i=0;$i<count($array[0]);$i++){
    $col=0;
    for($j=0;$j<count($array);$j++){
        $col+=$array[$j][$i];
    }
    if($col>$max){
        $max=$col;
    }
}
echo "$max";
?>

<?php

$array=[
    [5,8,2,1,4],
    [9,7,2,8,6],
    [0,5,4,1,7],
    [7,0,5,3,8],
    [9,2,4,1,0]
];
$n=count($array)-1;
$sum=0;
for($i=0;$i<count($array);$i++){
    $sum+=$array[$i][$i] + $array[$i][$n-$i];
}
if($n%2==0){
    $sum-=$array[$n/2][$n/2];
}
echo "$sum";

?>




