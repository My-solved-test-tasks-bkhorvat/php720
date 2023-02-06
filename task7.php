<?php

/*
 * Develop a program that determines the number of hours that have passed by user-entered degrees.
 * The entered number can be from 0 to 360.
 *
*/

$degrees = 300;

if ($degrees == 360 || $degrees == 0 || $degrees < 30) {
    echo '00:00';
} elseif ($degrees == 30 || $degrees < 60) {
    echo '01:00';
} elseif ($degrees == 60 || $degrees < 90) {
    echo '02:00';
} elseif ($degrees == 90 || $degrees < 120) {
    echo '03:00';
} elseif ($degrees == 120 || $degrees < 150) {
    echo '04:00';
} elseif ($degrees == 150 || $degrees < 180) {
    echo '05:00';
} elseif ($degrees == 180 || $degrees < 210) {
    echo '06:00';
} elseif ($degrees == 210 || $degrees < 240) {
    echo '07:00';
} elseif ($degrees == 240 || $degrees < 270) {
    echo '08:00';
} elseif ($degrees == 270 || $degrees < 300) {
    echo '09:00';
} elseif ($degrees == 300 || $degrees < 330) {
    echo '10:00';
} elseif ($degrees == 330 || $degrees < 360) {
    echo '11:00';
}

