<?php

//ARRAYS ASSOCIATIUS

$names = [ //PER DEFECTE
    0 => 'Sergi',
    1 => 'Xavi',
    2 => 'Romeu'
];

$person = [
    'name' => 'Sergi',
    'surname' => 'Tur',
    'surname2' => 'Badenas',
    'edat' => 38,
    'married' => yes
];

print_r($names);
var_dump($names);

require 'template.php';