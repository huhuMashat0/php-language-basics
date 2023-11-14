<?php
    //Null safe operator (PHP >= v.8)
    class Address {
        public $country;
        public function __construct($country) {
            $this->country = $country;
        }
    }

    class User{
        public $address;
        public function __construct($country) {
            $this->address = new Address($country);
        }
    }

    class Session{
        public $user;
        public function __construct($address) {
            // $this->user = new User($address);
        }
    }

    $session = new Session('India');
    // way 1
    // $address = $session->user ? $session->user->address : null;
    // way 2
    // $country = null;
    // if($session !== null){
    //     $user = $session -> user;
    //     if($user !== null){
    //         $address = $user -> address;
    //         if($address !== null){
    //             $country = $address -> country;
    //         }
    //     }
    // }
    // way 3 - Null safe operator (PHP >= v.8)
    $country = $session?->user?->address?->country;

?>