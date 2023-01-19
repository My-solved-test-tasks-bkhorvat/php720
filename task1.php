<?php
/*
    Find the sum of the digits of a number

    You need to develop a program that would consider the amount of the number of the number introduced by the user.
    For example: there is a number 123, then the program should calculate the sum of numbers 1, 2, 3, i.e. 6.
    If desired, you can make a check for the correctness of data entry by the User.
*/

$number = "12";

if (is_numeric($number)) {

    // Decision 1
    $result = array_sum(str_split($number, 1));

    echo $result;

    // Decision 2

    $sum = 0;

    for ($i = 0; $i < strlen($number); $i++) {
        $sum += $number[$i];
    }

    echo $sum;
} else {
    echo "Only numeric";
}
