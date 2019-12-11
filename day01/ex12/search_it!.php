#!/usr/bin/php
<?php

if ($argc < 3)
    exit (0);
$i = $argc - 1;
$my_hash = array();
while ($i > 1)
{
    $vars = explode(':', $argv[$i]);
    if (count($vars) == 2)
        $my_hash += array($vars[0] => $vars[1]);
    $i--;
}
if ($my_hash[$argv[1]])
    echo $my_hash[$argv[1]]."\n";

?>