<?php
   // Associative Arrays

   $employees = [
    [
        'name' =>'Mohammad',
        'age' => 25,
        'job' => 'Web Developer',
        'skills' => ['PHP', 'MySQL', 'JavaScript', 'HTML']
    ],
    [
        'name' =>'Ibrahim',
        'age' => 27,
        'job' => 'Web Developer',
        'skills' => ['NodeJS', 'MongoDB', 'ReactJS', 'Git']
    ],
    [
        'name' =>'Amani',
        'age' => 20,
        'job' => 'Back end',
        'skills' => ['NodeJS', 'PHP', 'Ruby', 'Github']
    ],
   ];

   //foreach 
   foreach ($employees as $key => $employee) {
    echo ($key + 1 ) . ' => '. $employee['name'] .' - '. $employee['job']. " - (";
    foreach ($employee["skills"] as $key2 => $skill) {
        echo $skill .  ",";
   }
   echo ")<br>";
}
?>