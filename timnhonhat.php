<?php
function arrayy() {
$num= [2,352,524,724,44,42];
$min =$num[2];
for ($i= 1; $i <count($num); $i++){
    if ($num[$i] < $min){
        $min = $num[$i];
    }
}
echo $min;
}
arrayy();
?>
