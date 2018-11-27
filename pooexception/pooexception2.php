<?php


function Sum ($x,$y){
    if( !is_numeric($x)||!is_numeric($y)){
        throw new Exception('il faut tapper un nombre');
    }
    return $x+$y;
}
?>