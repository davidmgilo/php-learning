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
    'married' => true
];

$married = true;
$married = false;

echo $names[0];
echo $person['surname'];

require 'template.php';