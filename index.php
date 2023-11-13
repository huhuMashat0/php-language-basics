<?php
    // classes
    class Vehicle{
        // Attributes
        protected $model;
        protected $year;
        public static $CONSTANT = 'constant value';

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
        public function printInfo(){
            echo "Name = " . $this->model ."<br>";
            echo "Year = " . $this->year ."<br>";
        }

        public static function showConstant(){
            // echo $this->model; <= this is will not work
            echo self::$CONSTANT;
        }
    }

    // Inheritance
    class Car extends Vehicle{
        private $color;
        public function __construct($model,$year, $color){
            parent::__construct($model,$year);
            $this->color = $color;
        }
        // polymorphism | Overriding
        public function printInfo(){
            parent::printInfo();
            echo "Color = " . $this->color ."<br>";
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
    echo " - " . $vehicle->getYear() . "<br>";

    $car = new Car("Toyota",2024, 'orange');
    $car -> printInfo();

    // from static
    // echo "<br>" . Vehicle::$CONSTANT;
    $vehicle->showConstant();
    

?>