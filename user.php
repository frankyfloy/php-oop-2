<?php

    class User{

        // use Carrello;

        private $name;
        private $lastname;
        private $dataDiNascita;
        private $carrello = [];


        public function __construct($name, $lastname, $dataDiNascita){
            $this->setName($name);
            $this->setLastname($lastname);
            $this->setDataDiNascita($dataDiNascita);
        }


        // SETTER AND GETTER
        public function setName($name){
            $this->$name = $name;
        }

        public function getName(){
            return $this->$name;
        }

        public function setLastname($lastname){
            $this->$lastname = $lastname;
        }

        public function getLastname(){
            return $this->$lastname;
        }

        public function setDataDiNascita($dataDiNascita){
            $this->$dataDiNascita = $dataDiNascita;
        }

        public function getDataDiNascita(){
            return $this->$dataDiNascita;
        }

        public function insertFattura($fattura){
            $this->$fatture[] = $fattura;
        }

        public function getFatture(){
            return $this->$fatture;
        }

        public function insertArrAssociativo($Key,$value){
            $this->$$arrAssociativo[$key] = $value;
        }

        public function getArrAssociativo(){
            return $this->$arrAssociativo;
        }
    }

    // DEBUG: 
    $utente = new User('Francesco','Sica','02/03/1991');
    var_dump($utente);
?>
