<?php
    include ('address.php');
    use Shop;

    Class Carrello{

        private $cart = [];
        private $Sum;

        public function __construct(){}

        // ----------------SETTER AND GETTER---------------------
        // Metodi inserisci elemento nel carrello e ottieni elementi carrello
        public function insertProduct($Key,$product){
            $this->cart[$key] = $product;
        }

        // Delete prodotto
        public function DeleteProduct($Key,$product){
            unset($this->cart[$key]);
        }

        // Ottieni tutto il carrello
        public function getCart(){
            return $this->$cart;
        }

        // Ottieni singolo prodotto nel carrello
        public function getCart($Key){
            return $this->$cart[$key];
        }

        // Somma prodotti carrello
        public function getSum(){
            foreach ($cart as $product) {
                $somma += $product['price'];
            }
            return $somma];
        }
    }
?>
