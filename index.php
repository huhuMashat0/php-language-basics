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

//    echo $employees[0]['name']."<br>";
//    echo $employees[0]['age']."<br>";
//    echo $employees[0]['job']."<br>";
//    echo $employees[0]['skills'][0]."<br>";

   for ($i = 0; $i < count($employees); $i++) {
    echo "<br>*******************<br>Employee " . ($i + 1) . "<br>*******************<br>";
    echo "Name: " . $employees[$i]["name"]."<br>";
    echo "Age: " .$employees[$i]["age"]."<br>";
    echo "Job: " .$employees[$i]["job"]."<br>";
    echo "Skills: (";
    for($j=0; $j <= 3; $j++){
        echo $employees[$i]["skills"][$j]. ", ";
    };
    echo ")"."<br>";
   }
?>