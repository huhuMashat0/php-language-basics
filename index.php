<?php
    // classes

    class Vehicle{
        // Attributes
        private $model;
        private $year;

        // constructor
        public function __construct($model, $year){
            $this->model = $model;
            $this->year = $year;
        }

        public function getModel(){
            return $this->model;
        }

        public function setModel($model){
            $this->model = $model;
        }

        public function getYear(){
            return $this->year;
        }

        public function setYear($year){
            if(is_int($year)) $this->year = $year;
            else throw new Exception("Invalid year!");
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

    // Encapsulation
    $vehicle->setModel("Honda");
    echo "<br>" . $vehicle->getModel();

    // $vehicle->setYear("Honda");
    $vehicle->setYear(2022);
    echo " - " . $vehicle->getYear();
    

?>