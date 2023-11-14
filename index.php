<?php
    // Interfaces
    interface ShapeInterface {
        public function perimeter();
    }
    // Abstract Classes
    abstract class Shape{
        abstract function area();
    }

    class Square extends Shape{
        private $length;
        public function __construct($length){
            $this->length = $length;
        }

        public function area(){
            return $this->length * $this->length;
        }

        public function periment(){
            return $this->length * 4;
        }
    }

    $sqrt = new Square(2);
    echo "Area square = " . $sqrt->area() . "<br>";
    echo "Periment square = " . $sqrt->periment() . "<br>";

?>