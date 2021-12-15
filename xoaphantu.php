<?php
$index_del = 6;
$array = [10,6,7,8,6,0,6];
$pop = $array[0];
$newarray = [];
for ($i = 0; $i < count($array); $i++){
    if ($array[$i] != $index_del){
        array_push($newarray,$array[$i]);
    }
}
echo "<pre>";
print_r($newarray);
echo "</pre>";
?>