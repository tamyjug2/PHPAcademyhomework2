<?php
function reverseString($str)
{
    for ($i = strlen($str) - 1, $j = 0; $j < $i; $i--, $j++) {
        $temp = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $temp;
    }
    echo $str;
}


$str = "First task done.";
echo(reverseString($str));