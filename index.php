<?php
    // strtings

    $str = "The Quick Brown Fox Jumps Over the lazy dog";

    echo "The sentence used is ( " . $str . " )<br><br>";

    echo "strlen(str) => ". strlen($str) . "<br>";

    echo "strtolower(str) => ". strtolower($str) . "<br>";
    
    echo "strtoupper(str) => ". strtoupper($str) . "<br>";

    echo "strpos(str, 'Q') => ". strpos($str,'Q') . "<br>";

    echo "str_replace('dog','monkey', str) => ". str_replace('dog','monkey', $str) . "<br>"; 

    echo "substr(str,5,10) => ". substr($str,4,5) . "<br>"; 
?>