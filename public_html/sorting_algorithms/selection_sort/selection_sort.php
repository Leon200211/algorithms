<?php


function selectionSort(array $array): array
{
    $sortedArray = [];
    $arrayIter = 0;
    $minValue = $array[$arrayIter];
    $minValueIter = $arrayIter;

    while (!empty($array)) {
        if ($arrayIter > count($array) - 1) {
            $sortedArray[] = $minValue;
            array_splice($array, $minValueIter, 1);

            if (count($array) <= 0) {
                break;
            }

            $arrayIter = 0;
            $minValue = $array[$arrayIter];
            $minValueIter = $arrayIter;
        }

        if ($array[$arrayIter] < $minValue) {
            $minValue = $array[$arrayIter];
            $minValueIter = $arrayIter;
        }

        $arrayIter++;
    }

    return $sortedArray;
}

function selectionSort_2(array $array): array {
    $arrayLength = count($array);

    for ($i = 0; $i < $arrayLength; $i++) {
        $low = $i;

        for ($j = $i + 1; $j < $arrayLength; $j++) {
            if ($array[$j] < $array[$low]) {
                $low = $j;
            }
        }

        if ($array[$i] > $array[$low]) {
            $tmp = $array[$i];
            $array[$i] = $array[$low];
            $array[$low] = $tmp;
        }
    }

    return $array;
}


var_dump(selectionSort([5, 3, 6, 2, 10]));
var_dump(selectionSort_2([5, 3, 6, 2, 10]));