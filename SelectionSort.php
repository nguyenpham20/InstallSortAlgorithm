<?php
$array = [1,9,4.5,6.6,5.7,-4.5];
function selectionSort($array) {
    for ($i = 0; $i < count($array); $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        if ($min != $j) {
            $tmp = $array[$i];
            $array[$i] = $array[$min];
            $array[$min] = $tmp;
        }
    }
    return $array;
}
echo "Mang goc:";
echo implode(",", $array);
echo "Mang sap xep:";
echo implode(',', selectionSort($array)). PHP_EOL;
