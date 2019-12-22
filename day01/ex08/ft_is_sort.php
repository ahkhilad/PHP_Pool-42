<?php

function ft_is_sort($tab)
{
    $arr = $tab;
    if ($arr === sort($tab, SORT_STRING) || $arr === rsort($tab, SORT_STRING))
        return (1);
    else
        return (0);
}

?>