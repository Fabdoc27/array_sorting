<?php

/**
 * Task 2
 * Given an array of different numbers and a target number, after sorting this array, return the index if the target is found. If not, return the index where it would be if it were inserted in order.
 */
function search( array $numbers, int $target ): int {
    sort( $numbers );

    $left  = 0;
    $right = count( $numbers ) - 1;

    while ( $left <= $right ) {
        $mid = floor(  ( $left + $right ) / 2 );

        if ( $numbers[$mid] === $target ) {
            return $mid;
        } elseif ( $numbers[$mid] < $target ) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return $left;
}

// Test case 1
$numbers = [1, 7, 3, 5, 6, 9, 15];
$target  = 5;
$result  = search( $numbers, $target );
echo "Test Case 1: $result \n";

// Test case 2
$numbers = [5, 6, 1, 3];
$target  = 2;
$result  = search( $numbers, $target );
echo "Test Case 2: $result \n";

// Test case 3
$numbers = [1, 3, 5, 6];
$target  = 7;
$result  = search( $numbers, $target );
echo "Test Case 3: $result \n";