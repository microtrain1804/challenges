<?php

$a=1;
$b=0;
$x=null;

for($i=0; $x<144; $i++){

    $x=($a+$b);
    echo "{$x}<br>";

    $a=$b;
    $b=$x;
}
