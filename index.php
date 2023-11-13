<?php
    // return 
    function sum (...$numbers){
        $acc = 0;
        foreach ($numbers as $number) $acc += $number;
        return  $acc;
    }

    $arr = [1,2,3,4,5,6,7,8,9];

    echo "If we collect all this numbers ( ". implode(" + ", $arr) . " ) The answer it will be = " .  sum(...$arr);
   

    function is_odd($number){
        return $number %2;
    }

    $num = 120;
    echo "<br>Are Number {$num} is odd? => " . is_odd($num);
?>