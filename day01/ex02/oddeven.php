#!/usr/bin/php
<?php

$str = "Enter a number: ";
while (1) 
{
    echo "$str";
    $var = fgets(STDIN);
    if (feof(STDIN))
        die("\n");
    $var = trim($var, "\n");
    $sp = $var;
    if (is_numeric($var)) 
    {
        $var = trim($var);
        $num = strlen($var);
        if (intval($var[$num - 1]) % 2 === 0)
            echo "The number $var is even\n";
        else 
            echo "The number $var is odd\n";
    }
    else 
        echo "'$sp' is not a number\n";
}

?>