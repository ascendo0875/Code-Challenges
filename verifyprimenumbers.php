<?php
/*
Problem: Prime Number Checker
Write a PHP function that takes an integer as input 
and returns true if the number is prime, and false otherwise. 
A prime number is a natural number greater than 1 
that is not a product of two smaller natural numbers.
*/

function isPrime($number) {
    // 1 and numbers less than 1 are not prime
    if ($number < 2) {
        return false;
    }

    // Check for factors up to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    // If no factors were found, the number is prime
    return true;
}

// Test cases
echo isPrime(2);    // should return true
echo isPrime(7);    // should return true
echo isPrime(4);    // should return false
echo isPrime(11);   // should return true
?>