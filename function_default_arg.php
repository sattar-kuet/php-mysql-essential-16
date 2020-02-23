<?php
function cirle_area($r,$PI=3.1416)
{
    $area = $PI*$r*$r;
    return $area;
}

$a = cirle_area(4);
$b = cirle_area(10);

echo $b;
?>