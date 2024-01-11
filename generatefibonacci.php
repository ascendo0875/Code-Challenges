<?php
/*
Write a PHP function that generates the Fibonacci sequence up 
to a specified number of terms. 
The Fibonacci sequence is a series of numbers in which each 
number is the sum of the two preceding ones, usually starting 
with 0 and 1.
*/


function generateFibonacci($terms) {
    $fibonacci = array();
    
    for ($i = 0; $i < $terms; $i++) {
        if ($i == 0) {
            $fibonacci[] = 0;
        } elseif ($i == 1) {
            $fibonacci[] = 1;
        } else {
            // Each subsequent number is the sum of the two preceding ones
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
    }

    return $fibonacci;
}

// Test case
print_r(generateFibonacci(10));
// Output: Array ( [0] => 0 [1] => 1 [2] => 1 [3] => 2 [4] => 3 [5] => 5 [6] => 8 [7] => 13 [8] => 21 [9] => 34 )
?>
