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
        if (strlen($var) >= 19)
        {
            $i = 19;
            while ($i < strlen($var))
            {
                if (intval($var[$i]) % 2 === 0)
                    $r = 1;
                else
                    $r = 0;
                $i++;
            }
        }
        if (intval($var) % 2 === 0 || $r == 1) 
        {
            echo "The number $var is even\n";
        }
        else 
        {
            echo "The number $var is odd\n";
        }
    }
    else 
    {
        echo "'$sp' is not a number\n";
    }
}

?>