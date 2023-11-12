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

   $count = count($employees);
   // Ascending
   echo "Asc<br>";
   $i = 0;
   while ($i < $count) {
    echo'Employee ' . ($i+1) . " => ". $employees[$i]['name'] .' - ' . $employees[$i]['job'] . "<br>" ;
    $i++;
   }
   
    
    // Descending
    echo "<br>Desc<br>";
   $i = $count - 1;
   while ($i >= 0) {
    echo'Employee ' . ($i+1) . " => ". $employees[$i]['name'] .' - ' . $employees[$i]['job'] . "<br>" ;
    $i--;
   }
?>