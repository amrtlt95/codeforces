<?php


$input = (int)readline("Enter the weight:".PHP_EOL);

$result = $input % 2 === 0 && $input > 2;

echo  $result ? "YES" : "NO";