<?php
    // arrow functions (php => 7.4)

    $arr = [1,2,3,4,5];
    $num = 4;

    // $func = function($value) use ($num){
    //     return $value * $num;
    // };

    $func = fn($value) => $value * $num;


    print_r(
        array_map($func, $arr)
    );
?>