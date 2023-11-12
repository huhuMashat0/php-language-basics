<?php
    // $a = null;
    $a = 1;
    const MAX = 100;

    if(isset($a)){
        echo "defined";
    }else{
        echo "undefined";
    }

    echo "<br>";
    echo isset($a) ? "defined" : "undefined";

    echo "<br>";
    // echo defined("M1AX") ? "defined" : "undefined";
    echo defined("MAX") ? "defined" : "undefined";
?>