#!/usr/bin/php
<?php

function cell_delete($str)
{
    $i = 0;
    while ($i < strlen($str))
    {
        if ($str[$i] != " ")
            return (1);
        $i++;
    }
    return (0);
}

if ($argc == 2)
{
    $str = $argv[1];
    $number_arr = preg_split("/[\/*%+-]/", $str);
    $number_arr = array_values(array_filter($number_arr, cell_delete));
    $number_arr = array_map('trim', $number_arr);

    $operator_arr = preg_split("/[\d|.\d]+/", $str);
    $operator_arr = array_values(array_filter($operator_arr, cell_delete));
    $operator_arr = array_map('trim', $operator_arr);

    $number_arr_len = count($number_arr);
    if ($number_arr_len > 2)
    {
        echo "Syntax Error\n";
        exit (0);
    }
    if (!(is_numeric($number_arr[0])) || !(is_numeric($number_arr[1])))
    {
        echo "Syntax Error\n";
        exit (0);
    }
    else
    {
        if ($operator_arr[0] == "+")
            echo ($number_arr[0] + $number_arr[1])."\n";
        if ($operator_arr[0] == "-")
            echo ($number_arr[0] - $number_arr[1])."\n";
        if ($operator_arr[0] == "*")
            echo ($number_arr[0] * $number_arr[1])."\n";
        if ($operator_arr[0] == "/")
            echo ($number_arr[0] / $number_arr[1])."\n";
        if ($operator_arr[0] == "%")
            echo ($number_arr[0] % $number_arr[1])."\n";
    }
}
else
    echo "Incorrect Parameters\n"

?>