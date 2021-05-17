<?php
    /**
     *UTENTE PREMIUM
     */
    class userPremium extends User
    {
        protected $level = 0;

        public function setLevel($level){
            $this->$level = $level;
        }

        public function getLevel(){
            return $this->$level;
        }
    }
?>
