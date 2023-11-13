<?php
    // closure function

    $arr = [1,2,3,4,5];

    $func = function($value){
        return $value *2;
    };

    print_r(
        array_map($func, $arr)
    );
?>