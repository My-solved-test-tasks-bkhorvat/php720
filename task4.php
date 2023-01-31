<?php

/*
 * Your task is to create an array, fill it with random values (you can use the rand function), find the maximum and
 * minimum values of the array and swap them.
 */

$arr = array();

for ($i = 0; $i < 100; $i++) {
    $arr[] = rand();
}

echo "Max number is " . max($arr) . "\n";
echo "Min number is " . min($arr);
