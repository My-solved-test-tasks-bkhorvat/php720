<?php

/*
 * You need to create an array and fill it with random numbers from 1 to 100 (rand function). Next, calculate the
 * product of those elements that are greater than zero and have paired indices. After that, display elements that are
 * greater than zero and that do not have a paired index.
 */

$arr = array();

for ($i = 0; $i < 100; $i++) {
    $arr[] = rand(1, 100);
}

$sum = 0;

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i]%2 == 0) {
        $sum += $arr[$i];
    } else {
        $nonPaired .= $arr[$i] . ', ';
    }
}
echo $sum . "\n";
echo $nonPaired;