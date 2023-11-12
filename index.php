<?php
    // count
    echo "count() => " . count(["Hello", "World"]) . "<br>";

    // is _array
    echo "is_array() => " . (integer) is_array([1,2,3]). " >> it's array<br>";
    echo "is_array() => " . (integer) is_array('Hello'). " >>it is not array<br>";

    // explode
    $string = "php javascript ruby swift kotlin";
    $arr = explode(" ", $string);
    echo "explode() => ";
    print_r($arr);

    //implode
    echo "<br>implode() => ". implode(" - ", $arr) . "<br>";

    // array_merge
    $arr1 = ['red', 'green', 'blue'];
    $arr2 = ['cyan','magenta','yellow'];
    $result = array_merge($arr1, $arr2);
    echo "array_merge() => ";
    print_r($result);
?>