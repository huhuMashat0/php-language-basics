<?php
    //Traits
    trait MyTrait {
        public function hello() {
            echo "Hello World!";
        }
    }

    class Example {
        use MyTrait;
    }

    $example = new Example();
    $example->hello();

?>