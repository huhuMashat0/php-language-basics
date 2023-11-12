<?php
    // echo gettype("Hello");
    // echo gettype(28);

    // *** casting ***

    // to string
    $var =  10;
    echo gettype((string) $var);
    echo "<br>";

    // to integer
    echo (integer) '5Hello';
    echo "<br>";

    // to boolean
    echo (boolean) "Hi"; 
    echo "<br>";
?>