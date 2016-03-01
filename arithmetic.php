<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b)
{
    return $a % $b;
}

echo add(5, 4) . PHP_EOL;

echo subtract(9, 5) . PHP_EOL;

echo multiply(5, 5) . PHP_EOL;

echo divide(20, 5) . PHP_EOL;

echo modulus(20, 5) . PHP_EOL;
