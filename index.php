<?php
   // Arrays
   $names = [
    'Mohammad',
    'Ibrahim',
    'Nadia',
    'Samer'
   ];

   $names[] = 'Ali'; // insert name
   $names[1] = 'Hussein'; // updete name
   unset($names[3]); // delete name
   print_r($names); // show names
?>