<?php
    //Magic Methods

    class Example {
        public function  __construct() {
            echo 'Constructor initialised <br>';
        }

        public function __call($method, $args) {
            echo "Unkown method ({$method}) - (";
            print_r($args);
            echo ")<br>";
        }

        public function __get($name){
            echo "Unknown method ({$name})<br>";
        }

        public function __set($name, $value) {
            echo "({$name}) is ({$value}) <br>";
        }

        public function __destruct() {
            echo "Object gets destroyed automatically <br>";
        }
    }

    $example = new Example();
    $example->hello('greet',2023);
    $example->test;
    $example->great = "Hello World";

?>