<?php

    class Fattura
    {
        private $data_Emissione;
        private $destinatario;
        private $saldo;
        private $products[];

        public function __construct($data_Emissione,$destinatario,$saldo){
            $this->setData_Emissione($data_Emissione);
            $this->setDestinatario($destinatario);
            $this->setSaldo($saldo);
        }

        // ----------------SETTER AND GETTER---------------------
        // Data Emissione
        public getData_Emissione(){
            return $this->$data_Emissione;
        }

        public setData_Emissione($data_Emissione){
            $this->$data_Emissione = $data_Emissione;
        }

        // Destinatario
        public getDestinatario(){
            return $this->$destinatario;
        }

        public setDestinatario($destinatario){
            $this->$destinatario = $destinatario;
        }

        // Saldo
        public setSaldo($saldo){
            return $this->$saldo;
        }

        public getSaldo(){
            $this->$saldo = $saldo;
        }

        // Products
        public setProducts($products){
            return $this->$products;
        }

        public getProducts(){
            $this->$products = $products;
        }
    }
?>
