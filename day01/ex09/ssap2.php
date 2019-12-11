#!/usr/bin/php
<?php

function check($first_str, $second_str)
{
    $i = 0;
    $base_str = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    $first_str = strtolower($first_str);
    $second_str = strtolower($second_str);
    $flen = strlen($first_str);
    $slen = strlen($second_str);
    $len = $flen;
    if ($flen > $slen)
        $len = $slen;
    while ($i < $len)
    {
        $ret = (strpos($base_str, $first_str[$i]) - (strpos($base_str, $second_str[$i])));
        if ($ret)
            return ($ret);
        $i++;
    }
    if ($flen < $slen)
        return (-1);
    else
        return (1);
}

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
    usort($arr, 'check');
    foreach($arr as $elm)
    {
        echo $elm."\n";
    }
}

?>