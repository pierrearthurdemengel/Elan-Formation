<?php

$elements = [
    "Choix1" => "checked",
    "Choix2" => "checked",
    "Choix3" => "",
];

echo genererCheckbox($elements);
function genererCheckbox($elements) {
    $result = "<form>";

    foreach($elements as $name => $checked) {
        $result .= "<input type='checkbox' id='$name' name='$name' $checked>
                    <label for='$name'>$name</label>";
    }

    $result .= "</form>";
    return $result;
}