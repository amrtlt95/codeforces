<?php

/*


You are given a rectangular board of M × N squares. 

Also you are given an unlimited number of standard domino pieces of 2 × 1 squares.

You are allowed to rotate the pieces. You are asked to place as many dominoes as possible on the board so as to meet the following conditions:




*/

$input = trim(fgets(STDIN));
$input = explode(" ",$input);
$m = intval($input[0]);
$n = intval($input[1]);
echo floor($m * $n /2);
?>