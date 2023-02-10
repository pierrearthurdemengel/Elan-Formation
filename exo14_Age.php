<?php
//exercice 14

            // Age depuis Date //

$time = date('21/05/2018');
function ago($time) {
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

foreach($sec as $sec => $value) {
    $div = $diff_time / $sec;
    if($div >= 1) {
        $time_ago = round($div);
        $time_type = $value;
        return 'Age de la personne: ';
    };
};