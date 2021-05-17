<?php

    class Product{

        protected $name;
        protected $descr;
        protected $codProd;
        protected $category;
        protected $price;

        public function __construct($name, $descr, $category){
            $this->setName($name);
            $this->setDescription($descr);
            $this->setCodProd($codProd);
            $this->setCategory($category);
            $this->setPrice($price);
        }

        // ----------------SETTER AND GETTER---------------------
        // Name
        public function setName($name){
            $this->$name = $name;
        }

        public function getName(){
            return $this->$name;
        }

        // Description
        public function setDescription($descr){
            $this->$descr = $descr;
        }

        public function getDescription(){
            return $this->$descr;
        }

        // CodProd
        public function setCodProd($codProd){
            $this->$codProd = $codProd;
        }

        public function getCodProd(){
            return $this->$codProd;
        }

        // Category
        public function setCategory($category){
            $this->$category = $category;
        }

        public function getCategory(){
            return $this->$category;
        }

        // Price
        public function setPrice($price){
            $this->$price = $price;
        }

        public function getPrice(){
            return $this->$price;
        }
    }
?>
