#!/usr/bin/php
<?php

if ($argc > 1)
{
    $str = "";
    $str .= $argv[1]." ";
    $str = trim($str);
    $arr = preg_split("/ +/", $str);
    $alen = count($arr);
    for ($i = 1 ; $i < $alen ; $i++ )
    {
        echo $arr[$i]." ";
    }
    echo $arr[0]."\n";    
}

?>