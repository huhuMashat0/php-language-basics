<?php
    // Null coalescing operator (PHP v.7)
    $userName = 'mohammad';
    $email = 'mohammad@example.com';

    // echo isset($userName) ? $userName :'';
    echo $userName ?? $email ?? 'noBody';

    //old code before use ??
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