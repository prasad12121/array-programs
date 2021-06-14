<?php

$values = array(0, 1, 2, 4, 8);
$test =1+4;
foreach ($values as $value) {
    $result = $value & $test;
    printf( $result);
}
