<?php

    trait Address{

        // PRIVATE
        private $state;
        private $city;
        private $cap;
        private $address;


        // ----------------SETTER AND GETTER---------------------
        // State
        public function setState($state){
            $this->$state = $state;
        }

        public function getState(){
            return $this->$state;
        }

        // City
        public function setCity($city){
            $this->$city = $city;
        }

        public function getCity(){
            return $this->$city;
        }

        // Cap
        public function setCap($cap){
            $this->$cap = $cap;
        }

        public function getCap(){
            return $this->$cap;
        }

        // Address
        public function setAddress($address){
            $this->$address = $address;
        }

        public function getAddress(){
            return $this->$address;
        }
    }

?>
