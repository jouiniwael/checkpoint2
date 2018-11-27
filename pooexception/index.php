<?php
include 'pooexception1.php';
include 'pooexception2.php';
try {
    echo  Divide(4,0).'<br>';
} catch (Exception $e) {
    echo $e->getMessage();
}
echo '<br>';
try {
    echo Sum  (4,'a').'<br>';
} catch (Exception $e) {
    echo $e->getMessage();
}