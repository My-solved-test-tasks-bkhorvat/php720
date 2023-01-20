<?php

/*
    You need to develop a program that would count the number of occurrences of some digit of your choice in
    the number of your choice.  For example: the number 5 in the number 442158755745 occurs 4 times
*/

$number = "15253545";
$checkNumber = '5';
$count = 0;

// decision 1
for ($i = 0; $i < strlen($number); $i++) {
    if ($number[$i] == $checkNumber) {
        $count++;
    }
}

echo $count;

// decision 2
$count = substr_count($number, $checkNumber);
echo $count;