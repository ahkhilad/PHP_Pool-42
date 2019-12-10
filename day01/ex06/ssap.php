#!/usr/bin/php
<?php

if ($argc > 1)
{
    $i = 1;
    $str = "";
    while ($i < $argc)
    {
        $str .= $argv[$i]." ";
        $i++;
    }
    $str = trim($str);
    $arr = preg_split("/ +/", $str);
    sort($arr, SORT_STRING);
    foreach($arr as $elm)
    {
        echo $elm."\n";
    }
}

?>