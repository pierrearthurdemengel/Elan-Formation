<?php 
class Role
{
        private Casting $casting;
        
        public function __construct(Film $film)
        { //initialisation
            $this->casting = $casting;
        }
        
        // GETTERS
        public function getFilm()
        {
            return $this->film;
        }
        
        public function __toString()
        {
            return $this->film;
        }
        public function getCasting()
        {
            return $this->casting;
        }
}
?>
