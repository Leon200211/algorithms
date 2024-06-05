<?php
/**
 * Классический двоичный поиск
 */

function binary_search(int $searchNum) {
    $numbers = range(1, 8);

    $minIndex = 0;
    $maxIndex = count($numbers) - 1;

    while ($minIndex <= $maxIndex) {
        $middleIndex = round(($minIndex + $maxIndex) / 2);
        $testValue = $numbers[$middleIndex];

        if($testValue == $searchNum) {
            return $middleIndex;
        } else if( $testValue > $searchNum) {
            $maxIndex = $middleIndex  - 1;
        } else {
            $minIndex = $middleIndex  + 1;
        }
    }

    return null;
}

binary_search(3);
