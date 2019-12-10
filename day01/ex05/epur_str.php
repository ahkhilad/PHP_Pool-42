#!/usr/bin/php
<?php

if ($argc == 2)
{
    $i = 1;
    while ($i < $argc)
    {
        echo(trim(preg_replace('/\s+/',' ',$argv[$i])));
        echo"\n";
        $i++;
    }
}

?>