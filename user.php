<?php

    class User{

        // use Carrello;

        protected $name;
        protected $lastname;
        protected $date_Of_Birth;
        protected $levelPoint = 0;
        protected $UserFidelity;
        private $isBanned = false;

        // protected $carrello = [];

        public function __construct($name, $lastname, $date_Of_Birth){
            $this->setName($name);
            $this->setLastname($lastname);
            $this->setDataDiNascita($date_Of_Birth);
            $this->$levelPoint += 1;
        }


        // SETTER AND GETTER

        // Name
        public function setName($name){
            $this->$name = $name;
        }

        public function getName(){
            return $this->$name;
        }

        // Lastname
        public function setLastname($lastname){
            $this->$lastname = $lastname;
        }

        public function getLastname(){
            return $this->$lastname;
        }

        // Date Of Birth
        public function setDate_Of_Birth($date_Of_Birth){
            $this->$date_Of_Birth = $date_Of_Birth;
        }

        public function getDate_Of_Birth(){
            return $this->$date_Of_Birth;
        }

        // IS BANNED
        public function setisBanned($banned){
            $this->$isBanned = $banned;
        }

        public function getisBanned(){
            return $this->$isBanned
        }

        // public function insertFattura($fattura){
        //     $this->$fatture[] = $fattura;
        // }
        //
        // public function getFatture(){
        //     return $this->$fatture;
        // }

        // public function insertArrAssociativo($Key,$value){
        //     $this->$$arrAssociativo[$key] = $value;
        // }
        //
        // public function getArrAssociativo(){
        //     return $this->$arrAssociativo;
        // }



        // public function getLevel(){
        //     return $this->$level;
        // }
    }

    $utente = new User('Francesco','Sica','02/03/1991');
    var_dump($utente);
?>


<!-- public function setLevel($point){

    if ($this->$levelPoint > 10) {
        $this->$UserFidelity = 'Bronze';

    }elseif ($this->$levelPoint > 20) {
        $this->$UserFidelity = 'Silver';

    }elseif ($this->$levelPoint > 30) {
        $this->$UserFidelity = 'Gold';

    }elseif ($this->$UserFidelity > 40) {
        $this->$UserFidelity = 'Diamond';
    }
    // $this->$level = $point;
} -->
