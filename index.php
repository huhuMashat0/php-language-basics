<?php
    // funciton
    function is_odd($number){
        echo $number % 2 ? "{$number} is odd" : "{$number} is even";
    }
    function calculate($n1,$n2, $calcu) 
    {
        switch($calcu)
        {
        case "+": 
            $compute = $n1 + $n2; 
            break;
        case "-":
            $compute = $n1 - $n2; 
            break;
        case "*":
            $compute = $n1 * $n2; 
            break;
        case "/":
            $compute = $n1 / $n2; 
            break;
        case "^":
            $compute = $n1 ** $n2; 
            break;
        default:
            $compute = $n1 + $n2; 
            break;
        }
        return $compute;
    }

    $a=5;
    $b= "^";
    $c= 2;

    echo "{$a} {$b} {$c} = " . calculate($a,$c,$b) . "<br>";

    is_odd(23);


?>