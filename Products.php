<?php

    class Product{

        protected $brand;
        protected $type;
        protected $descr;
        protected $codProd;
        protected $category;
        protected $price;

        public function __construct($brand, $type, $descr,$codProd, $category,$price){
            $this->setBrand($brand);
            $this->setType($type);
            $this->setDescription($descr);
            $this->setCodProd($codProd);
            $this->setCategory($category);
            $this->setPrice($price);
        }

        // ----------------SETTER AND GETTER---------------------
        // Brand
        public function setBrand($brand){
            $this->$brand = $brand;
        }

        public function getBrand(){
            return $this->$brand;
        }

        // Type
        public function setType($type){
            $this->$type = $type;
        }

        public function getType(){
            return $this->$type;
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
