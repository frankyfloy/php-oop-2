<?php
    include __DIR__.('/propertyShop.php');


    Class Carrello{
        use Shop;

        private $cart = [];

        public function __construct(){}

        // ----------------SETTER AND GETTER---------------------
        // Metodi inserisci elemento nel carrello e ottieni elementi carrello
        public function insertProduct($product){
            $this->$cart = $product;
        }

        // Delete prodotto
        public function DeleteProduct($Key,$product){
            unset($this->$cart[$key]);
        }

        // Ottieni tutto il carrello
        public function getCart(){
            return $this->$cart;
        }

        // Ottieni singolo prodotto nel carrello
        // public function getProduct($Key){
        //     return $this->$cart[$key];
        // }
    }
?>
