<?php
    //try...catch
    function division ($a,$b){
        if ($b == 0) throw new Exception("Can't divide on 0. <br>");
        return $a / $b;
    }

    try{
        echo division(4,0) . "<br>";
    } catch (Exception $e) {
        echo $e->getMessage();
    }finally{
        echo "Finally";
    }
?>