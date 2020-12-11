<?php
function palindrome($str) {
    //reverse the string
    $reverse = str_reverse($str);
    //check if string is equal to reverse of string
    return $str === $reverse; 
}


function fizz_buzz($n) {
    for ($i = 1; $i <= $n; ++$i) {
        if ($i%15 === 0 ) {
            echo "fizzbuzz";
        } elseif ($i%5 === 0) {
            echo "buzz";
        } elseif ( $i%3 === 0) {
            echo "fizz";
        } else {
            echo $i;
        }
    }
}
function int_reverse($int){
    //cast int to string
    $str = (string)$int;
    //deal with negative
    $isNegative = (bool)strpos($str, '-');
    //reverse string
    $reverse = str_reverse($str);
    return $isNegative ? (int)'-'.$reverse : (int)$reverse;
}

function str_reverse($str) {
    $chars = str_split($str);
    $result = '';
    foreach( $chars as $char ) {
        $result = $char.$result;
    }
    return $result;
}

function maxChar($str){
    $charMap = [];
    $chars = str_split($str);
    $max = 0;
    $maxChar = '';
    foreach ($chars as $char) {
        if (isset($charMap[$char])) {
            $charMap[$char]++;
        } else {
            $charMap[$char] = 1;
        }

        if ($charMap[$char] > $max) {
            $max = $charMap[$char];
            $maxChar = $char;
        } 
    }

    return $maxChar;
}

function fibonacci($n){
    if (n<2) {
        return $n;
    }
    return fibonacci(n-1) + fibonacci(n-2);
}



function spiralMatrix() {
    $endColumn = n-1;
    $startRow = 0;
}

