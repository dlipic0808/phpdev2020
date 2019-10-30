<?php

function sum($a,$b)
{
    return $a+$b;
}

function raz($a,$b)
{
    return $a-$b;
}

function mnoz($a,$b)
{
    return $a*$b;
}

function djel($a,$b)
{
    return $a/$b;
}

function sve($a,$b)
{
    echo sum($a,$b);
    echo raz($a,$b);
    echo mnoz($a,$b);
    echo djel($a,$b);
}

$i = 4;
$j = 2;

sve($i,$j);

?>