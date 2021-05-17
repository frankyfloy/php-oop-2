<?php

    /**
     * Proprietà dello shop
    */
    trait Shop
    {
        private $updateLevelEvery = 20;
        private $welcomeBonusPoints = 10;


        // ----------------SETTER AND GETTER---------------------
        // UPDATE LEVEL TO N Points
        public function setUpdateLevelEvery($points){
            $this->$updateLevelEvery = $updateLevelEvery;
        }

        public function getUpdateLevelEvery(){
            return $this->$updateLevelEvery;
        }

        // Welcome bonus
        public function setWelcomeBonusPoints($points){
            $this->$welcomeBonusPoints = $welcomeBonusPoints;
        }

        public function getWelcomeBonusPoints(){
            return $this->$welcomeBonusPoints;
        }

    }

?>
