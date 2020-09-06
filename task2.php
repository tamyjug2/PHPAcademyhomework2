<?php

function factorial($number){
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++){
        $factorial = $factorial * $i;
    }
    return $factorial;
}

// Driver Code
$number = 40;
$fact = Factorial($number);
echo "Factorial = $fact";
