#!/usr/bin/php
<?php

if ($argc == 4)
{
    $first_num = trim($argv[1]);
    $operator = trim($argv[2]);
    $second_num = trim($argv[3]);
    if ($operator === "+")
        echo ($first_num + $second_num)."\n";
    if ($operator === "-")
        echo ($first_num - $second_num)."\n";
    if ($operator === "*")
        echo ($first_num * $second_num)."\n";
    if ($operator === "/")
        echo ($first_num / $second_num)."\n";
    if ($operator === "%")
        echo ($first_num % $second_num)."\n";
}
else
    echo "Incorrect Parameters\n";

?>