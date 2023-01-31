<?php

/*
 * Your task will be to create an abbreviated version of the full name.
 * For example, we enter: Ivanov Ivan Petrovich, and as a result we should get: Ivanov I.P.
 */

$fullName = 'Vasulko Vasyl Vasyliovich';

$arr = explode(' ', $fullName);

$shortName = $arr[0] . ' ' . $arr[1][0] . ' '. $arr[2][0];

echo $shortName;