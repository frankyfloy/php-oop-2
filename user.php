<?php
    include  __DIR__.('/address.php');

    class User{

        use Address;

        protected $name;
        protected $lastname;
        protected $date_Of_Birth;
        protected $levelPoint = 0;
        protected $UserFidelity;
        protected $isBanned = false;

        public function __construct($name, $lastname, $date_Of_Birth){
            $this->setName($name);
            $this->setLastname($lastname);
            $this->setDate_Of_Birth($date_Of_Birth);
        }

        // ----------------SETTER AND GETTER---------------------
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
            return $this->$isBanned;
        }

    }
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
