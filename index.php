<?php


$array=[1,2,3,4,5];
$x=$array[0];
for($i=1;$i<count($array);$i++){
    $x+=$array[$i];
}
$y=$x/count($array);
var_dump($y);



$array=[5,1,9,2,5,4];
$x=0;
for($i=1;$i<count($array);$i++){
    if($array[$i]%2==0){
        $x+=$array[$i];
    }
}
var_dump($x);


$array=[6,5,47,7,2,77];
sort($array);
for($x = 0; $x < count($array); $x++) {
    echo "$array[$x] ";
}



$array=[
        [1,5,8,4],
        [5,7,6,5],
        [9,1,8,9]
];
$col=0;
for($i=0;$i<count($array[0]);$i++){
    for($j=0;$j<count($array);$j++){
        $col+=$array[$j][$i];
    }
    echo"$col ";
    $col=0;
}



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
