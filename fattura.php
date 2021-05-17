<?php

    class Fattura
    {
        protected $data_Emissione;
        protected $destinatario;
        protected $saldo;
        private $products = [];

        public function __construct($data_Emissione,$destinatario,$saldo){
            $this->setData_Emissione($data_Emissione);
            $this->setDestinatario($destinatario);
            $this->setSaldo($saldo);
        }

        public function __construct2($data_Emissione,$destinatario,$saldo,$products){
            $this->setData_Emissione($data_Emissione);
            $this->setDestinatario($destinatario);
            $this->setSaldo($saldo);
            $this->setProducts($products);
        }

        // ----------------SETTER AND GETTER---------------------
        // Data Emissione
        public function getData_Emissione(){
            return $this->$data_Emissione;
        }

        public function setData_Emissione($data_Emissione){
            $this->$data_Emissione = $data_Emissione;
        }

        // Destinatario
        public function getDestinatario(){
            return $this->$destinatario;
        }

        public function setDestinatario($destinatario){
            $this->$destinatario = $destinatario;
        }

        // Saldo
        public function setSaldo($saldo){
            return $this->$saldo;
        }

        public function getSaldo(){
            $this->$saldo = $saldo;
        }

        // Products
        public function setProducts($products){
            $this->$products = array_merge(array(), $products);
        }

        public function getProducts(){
            return $this->$products;
        }
    }
?>
