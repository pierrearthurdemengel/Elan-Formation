                    <!-- Object Page -->


<?php
Class MaDate {

}


class Personnage{
        public $vie = 100;
        public $atk = 20;
        private $nom;

        public function __construct($nom){ //initialisation
            $this->nom = $nom;
        }

        public function crier() {
            echo 'WARZAZAT !';
        }
        public function regenerer($vie = null){
           if(is_null($vie)){
            $this ->vie = 100;
           };               //$this = Personnage -> attribut
        }
        public function mort()
           {
             return $this-> vie <= 0;
           } 
        //    else {
        //     // $this->vie = $this->vie + $vie         ou plus simplement
        //     $this->vie += $vie;
        //    }
        private function empecher_neg(){
            if ($this->vie < 0) {
                $this->vie = 0;
            }
        }
        
        public function attaque($cible){
            $cible-> vie -= $this-> atk; //soustrait atk de this à vie de $cible
            $cible->empecher_neg();
            // $cible->vie = 20;
            var_dump($cible);
        }

        public function getNom(){
            return $this->nom;          //contourne le caratère privé
        }

        public function getVie() {
            return $this-> vie;
        }

        public function getATK() {
            return $this->atk;
        }
}

?>