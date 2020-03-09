<?php

use phpDocumentor\Reflection\Types\Integer;

/**
 * Return the sum of two numbers
 * 
 * @param integer $a The first number
 * @param integer $b The seconde number
 * 
 * @return integer The sum of the two number
 */
function add(int $a, int $b): int
{
    return $a + $b;
}
