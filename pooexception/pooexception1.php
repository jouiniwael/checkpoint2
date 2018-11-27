<?php
function Divide($x,$y)
{
    if ($y == 0) {
        throw new Exception("division par zero impossible!!");
    }
    return $x / $y;
}