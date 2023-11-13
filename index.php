<?php
    // classes

    class Vehicle{
        // Attributes
        public $model;
        public $year;

        // constructor
        public function __construct($model, $year){
            $this->model = $model;
            $this->year = $year;
        }


        // Methods
        public function start(){
            echo "{$this->model} engine started!";
        }
        public function stop(){
            echo "{$this->model} engine stopped!";
        }
    }

    // Object
    $vehicle = new Vehicle("BMW",2023);
    $vehicle->start();

    echo "<br>";

    $vehicle2 = new Vehicle("Honda",2022);
    $vehicle2->start();
?>