<?php

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p1 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

class Personne 
{
        private string $nom;
        private string $prenom;
        private  DateTime $date;

        function __construct($nom, $prenom, $date) 
        {
            $this -> nom = $nom;
            $this -> prenom = $prenom;
            $this -> date = $date;
        }

        function calcule_duree($date)
        {
            $date = strtotime($date);
            $diff_time = time() - $date;
        
                if($diff_time<1) 
                {
                    return 'à l\'instant';
                }
        }
        
        $sec = array(   31556926 => 'an',
                        2629743.83 => 'mois',
                        86400 => 'jour',
                        3600 => 'minute',
                        1 => 'seconde'        
        );
        
        foreach($sec as $sec => $value) 
        {
            $div = $diff_time / $sec;
            if($div >= 1) 
            {
                $time_ago = round($div);
                $time_type = $value;
                return 'Age de la personne: ';
            };
        };
}









































            // Age depuis Date //

$time = date('21/05/2018');
function ago($time) 
{
    $time = strtotime($time);
    $diff_time = time() - $time;

        if($diff_time<1) {return 'à l\'instant';}
};

$sec = array(   31556926 => 'an',
                2629743.83 => 'mois',
                86400 => 'jour',
                3600 => 'minute',
                1 => 'seconde'        
);

foreach($sec as $sec => $value) 
{
    $div = $diff_time / $sec;
    if($div >= 1) 
    {
        $time_ago = round($div);
        $time_type = $value;
        return 'Age de la personne: ';
    };
};



?>