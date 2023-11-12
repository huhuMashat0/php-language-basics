<?php
    // Null coalescing operator (PHP v.7)

    $userName = 'mohammad';
    $email = 'mohammad@example.com';

    // echo $isset($userName) ? $userName :'no body';
    echo $userName ?? $email ?? 'no body';

    //old code before php v7
    // $name = null;
    // $age = 22;
    // if ($name == null) {
    //     if ($age == null) {
    //         echo 'something else';
    //     } else {
    //         echo $age;
    //     }
    // } else {
    //     echo $name;
    // }
?>