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



var_dump(selectionSort([5, 3, 6, 2, 10]));